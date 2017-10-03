@if(Auth::guard('web')->check())
    <p class="text-success">
        Your'e Logged in as <strong>USER</strong>
    </p>
@else
    <p class="text-danger">
        Your'e Logged Out as <strong>USER</strong>
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        Your'e Logged in as <strong>Admin</strong>
    </p>
@else
    <p class="text-danger">
        Your'e Logged Out as <strong>Admin</strong>
    </p>
@endif