<!-- theme preloader start -->
@include('frontend.includes.partials.preloader')
<!-- theme preloader end -->



    <!-- Jquery -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('/assets/js/appear.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{ asset('/assets/js/slick.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Image Loader -->
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('/assets/js/circle-progress.min.js') }}"></script>
    <!-- Skillbar -->
    <script src="{{ asset('/assets/js/skill.bars.jquery.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
    <!--  AOS Animation -->
    <script src="{{ asset('/assets/js/aos.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('/assets/js/script.js') }}"></script>
    
    <!-- Global Cart Functions -->
    <script>
        // Global function to update cart count
        window.updateCartCount = async function() {
            try {
                const response = await fetch('{{ route("cart.count") }}');
                const data = await response.json();
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.count;
                }
            } catch (error) {
                console.error('Error updating cart count:', error);
            }
        };
        
        // Update cart count on page load
        document.addEventListener('DOMContentLoaded', function() {
            window.updateCartCount();
        });
    </script>