<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImageHelper
{
    /**
     * Upload and optimize image for production
     */
    public static function uploadImage($file, $directory, $prefix = '', $optimize = true)
    {
        try {
            // Generate unique filename
            $extension = $file->getClientOriginalExtension();
            $filename = $prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;

            // Ensure directory exists
            $fullPath = storage_path('app/public/' . $directory);
            if (!file_exists($fullPath)) {
                mkdir($fullPath, 0755, true);
            }

            if ($optimize) {
                // Optimize image using Intervention Image
                $image = Image::make($file);

                // Resize if too large (max 1920px width)
                if ($image->width() > 1920) {
                    $image->resize(1920, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                }

                // Save optimized image
                $image->save($fullPath . '/' . $filename, 85); // 85% quality
            } else {
                // Save original file
                $file->move($fullPath, $filename);
            }

            return $filename;
        } catch (\Exception $e) {
            \Log::error('Image upload failed: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get optimized image URL with fallback
     */
    public static function getImageUrl($filename, $directory, $fallback = null)
    {
        if (!$filename) {
            return $fallback ? asset($fallback) : asset('images/placeholder.png');
        }

        $path = $directory . '/' . $filename;

        // First try storage path (for development)
        $storagePath = storage_path('app/public/' . $path);
        if (file_exists($storagePath)) {
            return asset('storage/' . $path);
        }

        // Then try public path (for production)
        $publicPath = public_path('images/' . $path);
        if (file_exists($publicPath)) {
            return asset('images/' . $path);
        }

        return $fallback ? asset($fallback) : asset('images/placeholder.png');
    }

    /**
     * Delete image file
     */
    public static function deleteImage($filename, $directory)
    {
        if (!$filename) {
            return false;
        }

        try {
            $path = $directory . '/' . $filename;
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
                return true;
            }
            return false;
        } catch (\Exception $e) {
            \Log::error('Image deletion failed: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Generate responsive image URLs
     */
    public static function getResponsiveImageUrls($filename, $directory, $fallback = null)
    {
        if (!$filename) {
            return [
                'original' => $fallback ? asset($fallback) : asset('images/placeholder.png'),
                'large' => $fallback ? asset($fallback) : asset('images/placeholder.png'),
                'medium' => $fallback ? asset($fallback) : asset('images/placeholder.png'),
                'small' => $fallback ? asset($fallback) : asset('images/placeholder.png')
            ];
        }

        $path = $directory . '/' . $filename;

        // First try storage path (for development)
        $storagePath = storage_path('app/public/' . $path);
        if (file_exists($storagePath)) {
            $baseUrl = asset('storage/' . $path);
            return [
                'original' => $baseUrl,
                'large' => $baseUrl,
                'medium' => $baseUrl,
                'small' => $baseUrl
            ];
        }

        // Then try public path (for production)
        $publicPath = public_path('images/' . $path);
        if (file_exists($publicPath)) {
            $baseUrl = asset('images/' . $path);
            return [
                'original' => $baseUrl,
                'large' => $baseUrl,
                'medium' => $baseUrl,
                'small' => $baseUrl
            ];
        }

        return [
            'original' => $fallback ? asset($fallback) : asset('images/placeholder.png'),
            'large' => $fallback ? asset($fallback) : asset('images/placeholder.png'),
            'medium' => $fallback ? asset($fallback) : asset('images/placeholder.png'),
            'small' => $fallback ? asset($fallback) : asset('images/placeholder.png')
        ];
    }

    /**
     * Validate image file
     */
    public static function validateImage($file, $maxSize = 2048, $allowedTypes = ['jpeg', 'jpg', 'png', 'gif', 'webp'])
    {
        if (!$file || !$file->isValid()) {
            return false;
        }

        // Check file size (in KB)
        if ($file->getSize() > ($maxSize * 1024)) {
            return false;
        }

        // Check file type
        $extension = strtolower($file->getClientOriginalExtension());
        if (!in_array($extension, $allowedTypes)) {
            return false;
        }

        // Check MIME type
        $mimeType = $file->getMimeType();
        $allowedMimes = [
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/gif',
            'image/webp'
        ];

        if (!in_array($mimeType, $allowedMimes)) {
            return false;
        }

        return true;
    }
}
