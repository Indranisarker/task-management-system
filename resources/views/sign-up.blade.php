@extends('navber')

@section('main')
<div class="login-container">
    <div class="form-section">
        <h1>Sign Up</h1>
        <form action="/add-user" id="signupform" name="signupform" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name<span class="req" style="color: red">*</span></label>
                <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                <div style="color: red">@error('name') {{ $message }} @enderror </div>
            </div>
            <div class="form-group">
                <label for="email">Email<span class="req" style="color: red">*</span></label>
                <input type="text" id="email" name="email" placeholder="admin@gmail.com" value="{{ old('email') }}">
                <div style="color: red">@error('email') {{ $message }} @enderror </div>
            </div>
            <div class="form-group">
                <label for="employee-id">Employee Id<span class="req" style="color: red">*</span></label>
                <input type="text" id="employee-id" name="employee-id" placeholder="Enter employee id" value="{{ old('employee-id') }}">
                <div style="color: red">@error('employee-id') {{ $message }} @enderror </div>
            </div>
            <div class="form-group">
                <label for="password">Password<span class="req" style="color: red">*</span></label>
                <input type="password" id="password" name="password" placeholder="********">
                <div style="color: red">@error('password') {{ $message }} @enderror </div>
            </div>
            <div class="form-group">
                <label for="role">Select a Role</label>
                <select name="role" id="role">
                    <option value="manager">Manager </option>
                    <option value="teammate">Teammate </option>
                </select>
                <div style="color: red">@error('role') {{ $message }} @enderror </div>
            </div>
            <button type="submit" class="login-btn">Sign Up </button>
        </form>
    </div>
</div>
@endsection
{{-- 
@section('registrationJS')
<script>
    $("#signupform").submit(function (e) {
        e.preventDefault();

        // Clear previous error messages
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').html('');

        $.ajax({
            url: '{{ route("user.processRegistration") }}',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                console.log(response); // Add this line to check the response

                if (response.status === false) {
                    var errors = response.errors;

                    // Handle name errors
                    if (errors.name) {
                        $("#name").addClass('is-invalid');
                        $("#nameError").html(errors.name[0]);
                    }

                    // Handle email errors
                    if (errors.email) {
                        $("#email").addClass('is-invalid');
                        $("#emailError").html(errors.email[0]);
                    }
                    //Handle Phone number errors
                    if (errors.employee-id) {
                        $("#employee-id").addClass('is-invalid');
                        $("#employee-idError").html(errors.phone_no[0]);
                    }
                    // Handle password errors
                    if (errors.password) {
                        $("#password").addClass('is-invalid');
                        $("#passwordError").html(errors.password[0]);
                    }
                } else {
                    // Handle successful registration (if needed)
                    window.location.href='{{ route("user.showLoginForm") }}'
                    $('#message').html('<p>Registration successful!</p>');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('AJAX error:', textStatus, errorThrown); // Add this for debugging
                $('#message').html('<p>There was an error with your registration.</p>');
            }
        });
    });
</script>
@endsection --}}