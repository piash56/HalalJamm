# 🚀 **cPanel Upload Guide - Avoiding Antivirus Issues**

## 🚨 **Problem:**

cPanel antivirus is blocking your build.zip file because it contains compressed JavaScript files.

## ✅ **Solution: Upload Files Individually**

### **Step 1: Create Directory Structure in cPanel**

1. **Go to cPanel File Manager**
2. **Navigate to:** `public_html/public/`
3. **Create folder:** `build`
4. **Inside build folder, create:** `assets`

**Final structure should be:**

```
public_html/
├── public/
│   └── build/
│       ├── assets/          ← Create this folder
│       └── manifest.json   ← Upload this file
```

### **Step 2: Upload manifest.json**

1. **Go to:** `public_html/public/build/`
2. **Upload:** `manifest.json` (from your local `public/build/` folder)
3. **This file is small and won't trigger antivirus**

### **Step 3: Upload Assets Folder Contents**

**Upload these files one by one to `public_html/public/build/assets/`:**

#### **CSS Files (Upload these first):**

-   `app-BnKuIGd_.css`
-   `app-Ct9yFfuF.css`
-   `choices-qOc7NKmk.css`
-   `dropzone-CIgf0F6L.css`
-   `flatpickr-CksuuEqD.css`
-   `glightbox-BCI2ZFMw.css`
-   `icons-CV3DgZ9u.css`
-   `mermaid-DH_3od9j.css`
-   `navigation-8emF7nl4.css`
-   `nouislider-B10gRL1b.css`
-   `quill-CTpA5PSA.css`
-   `quill-DqW0R9D9.css`
-   `quill-JcTXo0Ec.css`
-   `sweetalert2-Bcharplr.css`
-   `swiper-bundle-D7_QnSw0.css`

#### **JavaScript Files:**

-   `_commonjsHelpers-Cpj98o6Y.js`
-   `apexcharts.esm-D2GxFAl_.js`
-   `app-BAxZsVq6.js`
-   `app-chat-DmEoZipb.js`
-   `autoplay-BSkre24M.js`
-   `categories-D-s9rZiQ.js`
-   `coming-soon-BtwbiXGV.js`
-   `config-BfRYqo_Q.js`
-   `dashboard-CAZb1ALU.js`
-   `gallery-DFZgimDt.js`
-   `index-C7GnRNNn.js`
-   `index-CMPRrb3C.js`
-   `layout-Dkham-Ye.js`
-   `pos-LSVgkKvX.js`
-   `product-D8Ko_m6P.js`
-   `setting-BDbecj9Z.js`
-   `widgets-BiRVoxHN.js`
-   `wNumb-G-EhI-NR.js`

#### **Image Files:**

-   `faq-Ze-1A_9E.png`
-   `food-bg-BVOKvKSX.jpg`
-   `profile-bg-2-jZp28IcH.jpg`
-   `r-1-DPv_L00V.jpg`

### **Step 4: Verify Upload**

**Check that these files exist:**

-   ✅ `public_html/public/build/manifest.json`
-   ✅ `public_html/public/build/assets/` (folder with all files)

### **Step 5: Test Your Application**

1. **Visit your website:** `https://yourdomain.com/`
2. **Check admin dashboard:** `https://yourdomain.com/admin/login`
3. **Verify assets load:** Check browser developer tools for any 404 errors

---

## 🔧 **Alternative Methods (If Individual Upload Fails)**

### **Method 1: Use Different Compression**

**On your local machine:**

```bash
# Try tar.gz instead of zip
tar -czf build-assets.tar.gz -C public build/

# Or try 7z
7z a build-assets.7z public/build/
```

### **Method 2: Use FTP/SFTP**

**If cPanel File Manager fails:**

1. **Use FTP client** (FileZilla, WinSCP)
2. **Connect to your cPanel**
3. **Upload files directly** (bypasses web upload restrictions)

### **Method 3: Use Git (If Available)**

**If your cPanel supports Git:**

1. **Push to GitHub**
2. **Clone in cPanel**
3. **Run build commands** (if Node.js is available)

---

## 🚨 **Why This Happens**

### **Antivirus False Positives:**

-   **Compressed JavaScript** looks suspicious to antivirus
-   **Minified code** can trigger security scans
-   **Multiple files** in one archive = higher risk score

### **cPanel Security:**

-   **Shared hosting** has strict security
-   **File scanning** is aggressive
-   **JavaScript files** are flagged as potential threats

---

## ✅ **Prevention for Future**

### **Best Practices:**

1. **Upload files individually** for production
2. **Use Git deployment** when possible
3. **Keep build assets** in version control
4. **Test uploads** in staging environment first

---

## 🎯 **Quick Fix Summary**

**Instead of uploading build.zip:**

1. ✅ Create `public/build/assets/` folder in cPanel
2. ✅ Upload `manifest.json` first
3. ✅ Upload all asset files individually
4. ✅ Test your application

**This method bypasses antivirus issues and gets your app working!**
