<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/home">Home</a>

          @if (Auth::guest())
                    <a class="nav-link active ml-auto" href="{{ route('login') }}">Login</a>
                    <li> <a  class="nav-link active ml-auto" href="{{ route('register') }}">Register</a></li>

              @else
              <a class="nav-link active ml-auto" href="#">Hi,&nbsp; {{ Auth::user()->name }}</a>
              <li> <a  class="nav-link active ml-auto" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">logout</a></li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                </form>
             @endif

        </nav>
      </div>
    </div>
