<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('admin/dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <form action="{{url('logout')}}" method="post" id="myForm">
                    @csrf
                    <a class="nav-link" href="javascript:;" onclick='document.getElementById("myForm").submit();'>Logout</a>
                </form>
            </li>
        </ul>
    </div>
</nav>