<h1>Admin Dashboard</h1>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button>Logout</button>
</form>