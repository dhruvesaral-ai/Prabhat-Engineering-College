@extends('website.layout.main')
@section('content')
<div class="contents">
    <div class="container">
        <section id="about-library" class="section-padding pt-0 pb-4">
            <div class="section-heading center-heading">
                <h3>Staff Opportunities at Prabhat Engineering College</h3>
            </div>
            <p class="mb-4">
                Prabhat Engineering College, established in 2008 and affiliated with AKTU, invites passionate and qualified educators to join our dynamic academic team.
                We offer opportunities across Engineering, MBA, and Polytechnic departments. If you're committed to excellence in teaching and innovation in education,
                fill out the application form below to be a part of our growing institution.
            </p>
            <div class="col-lg-10 mx-auto">
                <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data" class="thm-form2">
                    @csrf
                    <div class="row col-12 mx-auto px-0">
                        <div class="col-xl-6 col-lg-12">
                            <!-- Post Applied For -->
                            <div class="mb-3 form-group">
                                <label for="post" class="form-label">Post Applied For<span class="text-danger">*</span></label>
                                <select class="form-select form-control" id="post" name="post_applied" required>
                                    <option value="MCA Faculty">MCA Faculty</option>
                                    <option value="BBA Faculty">BBA Faculty</option>
                                    <option value="Btech (CS) Faculty">Btech (CS) Faculty</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12">
                            <!-- Name -->
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label">Full Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="full_name" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- Email -->
                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- Experience -->
                            <div class="mb-3 form-group">
                                <label for="experience" class="form-label">Experience (in years)<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="experience" name="experience" min="0" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- Highest Degree -->
                            <div class="mb-3 group">
                                <label for="degree" class="form-label">Highest Qualification/Degree<span class="text-danger">*</span></label>
                                <select type="text" class="form-control form-select" id="degree" name="highest_degree" required>
                                    <option value="Post graduate">Post graduate</option>
                                    <option value="B-tech.">B-tech.</option>
                                    <option value="Bsc.">Bsc.</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- Phone Number -->
                            <div class="mb-3 form-group">
                                <label for="phone" class="form-label">Phone Number<span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- Resume Upload -->
                            <div class="mb-3 form-group">
                                <label class="form-label">Upload Resume <span class="text-danger">*</span></label><br>
                                <div class="custom-file-upload">
                                    <button type="button" class="custom-upload-btn">
                                        <i class="fa fa-upload"></i> Choose Resume
                                    </button>
                                    <input type="file" name="resume" id="resume" required onchange="displayFileName(this)">
                                </div>
                                <div id="file-name" class="file-name-display file-name">No file chosen</div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- Submit Button -->

                            <button type="submit" class="btn thm-btn">Submit Application <i class="fa fa-check ms-1"></i></button>
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </div>
    
    <style>
        .error-message {
    color: #dc3545;
    font-size: 0.875em;
    margin-top: 0.25rem;
}

.is-invalid {
    border-color: #dc3545 !important;
}

.file-name {
    margin-top: 0.5rem;
    font-size: 0.9em;
    color: #6c757d;
}
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.thm-form2');
        
        form.addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        function validateForm() {
            let isValid = true;

            // Validate Post Applied
            const postApplied = document.getElementById('post');
            if (postApplied.value === '') {
                showError(postApplied, 'Please select a post');
                isValid = false;
            } else {
                clearError(postApplied);
            }

            // Validate Department
            // const department = document.getElementById('department');
            // if (department.value === '') {
            //     showError(department, 'Please select a department');
            //     isValid = false;
            // } else {
            //     clearError(department);
            // }

            // Validate Full Name
            const fullName = document.getElementById('name');
            if (fullName.value.trim() === '') {
                showError(fullName, 'Full name is required');
                isValid = false;
            } else if (!/^[a-zA-Z\s]{3,}$/.test(fullName.value.trim())) {
                showError(fullName, 'Name must be at least 3 characters and contain only letters');
                isValid = false;
            } else {
                clearError(fullName);
            }

            // Validate Email
            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email.value.trim() === '') {
                showError(email, 'Email is required');
                isValid = false;
            } else if (!emailRegex.test(email.value.trim())) {
                showError(email, 'Please enter a valid email address');
                isValid = false;
            } else {
                clearError(email);
            }

            // Validate Experience
            const experience = document.getElementById('experience');
            if (experience.value === '') {
                showError(experience, 'Experience is required');
                isValid = false;
            } else if (isNaN(experience.value) || experience.value < 0) {
                showError(experience, 'Please enter a valid number (0 or higher)');
                isValid = false;
            } else {
                clearError(experience);
            }

            // Validate Highest Degree
            const highestDegree = document.getElementById('degree');
            if (highestDegree.value === '') {
                showError(highestDegree, 'Please select your highest degree');
                isValid = false;
            } else {
                clearError(highestDegree);
            }

            // Validate Phone Number
            const phone = document.getElementById('phone');
            const phoneRegex = /^[0-9]{10}$/;
            if (phone.value.trim() === '') {
                showError(phone, 'Phone number is required');
                isValid = false;
            } else if (!phoneRegex.test(phone.value.trim())) {
                showError(phone, 'Please enter a valid 10-digit phone number');
                isValid = false;
            } else {
                clearError(phone);
            }

            // Validate Resume
            const resume = document.getElementById('resume');
            if (resume.files.length === 0) {
                showError(resume, 'Please upload your resume');
                isValid = false;
            } else {
                const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                const file = resume.files[0];
                const fileSizeMB = file.size / (1024 * 1024);
                
                if (!allowedTypes.includes(file.type)) {
                    showError(resume, 'Only PDF and Word documents are allowed');
                    isValid = false;
                } else if (fileSizeMB > 5) {
                    showError(resume, 'File size must be less than 5MB');
                    isValid = false;
                } else {
                    clearError(resume);
                }
            }

            return isValid;
        }

        function showError(input, message) {
            const formGroup = input.closest('.form-group') || input.closest('.group');
            const errorElement = formGroup.querySelector('.error-message');
            
            if (!errorElement) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message text-danger small mt-1';
                errorDiv.textContent = message;
                formGroup.appendChild(errorDiv);
            } else {
                errorElement.textContent = message;
            }
            
            input.classList.add('is-invalid');
        }

        function clearError(input) {
            const formGroup = input.closest('.form-group') || input.closest('.group');
            const errorElement = formGroup.querySelector('.error-message');
            
            if (errorElement) {
                errorElement.remove();
            }
            
            input.classList.remove('is-invalid');
        }

        // Display file name function
        function displayFileName(input) {
            const fileNameDisplay = document.querySelector('.file-name');
            if (input.files.length > 0) {
                fileNameDisplay.textContent = input.files[0].name;
                clearError(input);
            } else {
                fileNameDisplay.textContent = 'No file chosen';
            }
        }

        // Add real-time validation for some fields
        document.getElementById('name').addEventListener('blur', function() {
            const input = this;
            if (input.value.trim() === '') {
                showError(input, 'Full name is required');
            } else if (!/^[a-zA-Z\s]{3,}$/.test(input.value.trim())) {
                showError(input, 'Name must be at least 3 characters and contain only letters');
            } else {
                clearError(input);
            }
        });

        document.getElementById('email').addEventListener('blur', function() {
            const input = this;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (input.value.trim() === '') {
                showError(input, 'Email is required');
            } else if (!emailRegex.test(input.value.trim())) {
                showError(input, 'Please enter a valid email address');
            } else {
                clearError(input);
            }
        });

        document.getElementById('phone').addEventListener('blur', function() {
            const input = this;
            const phoneRegex = /^[0-9]{10}$/;
            if (input.value.trim() === '') {
                showError(input, 'Phone number is required');
            } else if (!phoneRegex.test(input.value.trim())) {
                showError(input, 'Please enter a valid 10-digit phone number');
            } else {
                clearError(input);
            }
        });
    });
</script>
    @endsection
