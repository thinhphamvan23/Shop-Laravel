
@include('userview.head')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm" style="width: 28rem;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Register</h3>
        <form action="{{ route('user_create') }}" method="POST">
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" >
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terms">
            <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Register</button>
          <div class="text-center mt-3">
            <a href="{{ route('login') }}">Already have an account? Login</a>
          </div>
          @csrf
        </form>
      </div>
    </div>
  </div>
  @include('userview.footer')

