document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add animation classes on scroll
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.card, .section-title, .form-group');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.classList.add('fade-in');
            }
        });
    };
    
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run once on page load
    
    // Form validation for contact page
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let isValid = true;
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');
            
            // Reset error states
            document.querySelectorAll('.error').forEach(el => el.remove());
            
            // Validate name
            if (nameInput.value.trim() === '') {
                showError(nameInput, 'Nama harus diisi');
                isValid = false;
            }
            
            // Validate email
            if (emailInput.value.trim() === '') {
                showError(emailInput, 'Email harus diisi');
                isValid = false;
            } else if (!isValidEmail(emailInput.value.trim())) {
                showError(emailInput, 'Email tidak valid');
                isValid = false;
            }
            
            // Validate message
            if (messageInput.value.trim() === '') {
                showError(messageInput, 'Pesan harus diisi');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            } else {
                // In a real application, you would submit the form here
                alert('Form berhasil dikirim!');
            }
        });
    }
    
    function showError(input, message) {
        const errorElement = document.createElement('div');
        errorElement.className = 'error';
        errorElement.style.color = 'var(--accent-color)';
        errorElement.style.fontSize = '0.8rem';
        errorElement.style.marginTop = '0.25rem';
        errorElement.textContent = message;
        
        input.parentNode.appendChild(errorElement);
        input.style.borderColor = 'var(--accent-color)';
    }
    
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    // Image gallery for wisata page
    const galleryImages = document.querySelectorAll('.gallery-img');
    if (galleryImages.length > 0) {
        const modal = document.createElement('div');
        modal.className = 'modal';
        modal.style.display = 'none';
        modal.style.position = 'fixed';
        modal.style.zIndex = '1000';
        modal.style.left = '0';
        modal.style.top = '0';
        modal.style.width = '100%';
        modal.style.height = '100%';
        modal.style.backgroundColor = 'rgba(0,0,0,0.9)';
        modal.style.justifyContent = 'center';
        modal.style.alignItems = 'center';
        modal.style.flexDirection = 'column';
        
        const modalImg = document.createElement('img');
        modalImg.style.maxHeight = '80%';
        modalImg.style.maxWidth = '80%';
        
        const captionText = document.createElement('div');
        captionText.style.color = 'white';
        captionText.style.marginTop = '1rem';
        captionText.style.fontSize = '1.2rem';
        
        modal.appendChild(modalImg);
        modal.appendChild(captionText);
        document.body.appendChild(modal);
        
        galleryImages.forEach(img => {
            img.addEventListener('click', function() {
                modal.style.display = 'flex';
                modalImg.src = this.src;
                captionText.textContent = this.alt || 'Gambar Wisata Solo';
            });
        });
        
        modal.addEventListener('click', function() {
            modal.style.display = 'none';
        });
    }
});