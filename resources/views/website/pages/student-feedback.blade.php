@extends('website.layout.main')
@section('content')

        <div class="contents">


            <section id="cnt-section" class="contact-info section-padding pt-0">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-heading center-heading">
                                <h3>Student Feedback </h3><br>
                                {{-- <p>Make an Online Payment</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <form method="POST" action="{{ route('student.feedback.store') }}" accept-charset="UTF-8"
                class="thm-form2" id="">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" id="name" name="contact_name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="department" id="department" class="form-control" placeholder="Department" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" required>
                        </div>
                        <div class="form-group">
                            <textarea name="suggestions" id="suggestions" class="form-control" placeholder="Suggestions" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <button class="btn btn-main" type="submit">
                            Send Message <i class="fa fa-angle-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
            </section>


<style>
    .error-message {
    color: #dc3545;
    font-size: 0.875em;
    margin-top: 0.25rem;
}

.is-invalid {
    border-color: #dc3545 !important;
}

.form-group {
    margin-bottom: 1.5rem;
    position: relative;
}
</style>


@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.thm-form2');
    
    // Form submission validation
    form.addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    // Real-time field validation
    document.getElementById('name').addEventListener('blur', validateName);
    document.getElementById('department').addEventListener('blur', validateDepartment);
    document.getElementById('designation').addEventListener('blur', validateDesignation);
    document.getElementById('suggestions').addEventListener('blur', validateSuggestions);

    function validateForm() {
        let isValid = true;
        
        isValid = validateName() && isValid;
        isValid = validateDepartment() && isValid;
        isValid = validateDesignation() && isValid;
        isValid = validateSuggestions() && isValid;
        
        return isValid;
    }

    function validateName() {
        const nameField = document.getElementById('name');
        const value = nameField.value.trim();
        
        if (value === '') {
            showError(nameField, 'Full name is required');
            return false;
        } 
        else if (!/^[a-zA-Z\s]{3,}$/.test(value)) {
            showError(nameField, 'Name must be at least 3 characters and contain only letters');
            return false;
        } 
        else {
            clearError(nameField);
            return true;
        }
    }

    function validateDepartment() {
        const deptField = document.getElementById('department');
        const value = deptField.value.trim();
        
        if (value === '') {
            showError(deptField, 'Department is required');
            return false;
        } 
        else if (!/^[a-zA-Z\s]{3,}$/.test(value)) {
            showError(deptField, 'Department must be at least 3 characters');
            return false;
        } 
        else {
            clearError(deptField);
            return true;
        }
    }

    function validateDesignation() {
        const designationField = document.getElementById('designation');
        const value = designationField.value.trim();
        
        if (value === '') {
            showError(designationField, 'Designation is required');
            return false;
        } 
        else if (!/^[a-zA-Z\s]{3,}$/.test(value)) {
            showError(designationField, 'Designation must be at least 3 characters');
            return false;
        } 
        else {
            clearError(designationField);
            return true;
        }
    }

    function validateSuggestions() {
        const suggestionsField = document.getElementById('suggestions');
        const value = suggestionsField.value.trim();
        
        if (value === '') {
            showError(suggestionsField, 'Suggestions are required');
            return false;
        } 
        else if (value.length < 10) {
            showError(suggestionsField, 'Suggestions should be at least 10 characters');
            return false;
        } 
        else {
            clearError(suggestionsField);
            return true;
        }
    }

    function showError(input, message) {
        const formGroup = input.closest('.form-group');
        let errorElement = formGroup.querySelector('.error-message');
        
        if (!errorElement) {
            errorElement = document.createElement('div');
            errorElement.className = 'error-message text-danger small mt-1';
            formGroup.appendChild(errorElement);
        }
        
        errorElement.textContent = message;
        input.classList.add('is-invalid');
    }

    function clearError(input) {
        const formGroup = input.closest('.form-group');
        const errorElement = formGroup.querySelector('.error-message');
        
        if (errorElement) {
            errorElement.remove();
        }
        
        input.classList.remove('is-invalid');
    }
});
</script>
