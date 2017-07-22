<div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
          <a class="nav-link active" href="/home">Home</a>
                @if (Auth::guest())
                      <li>   <a class="nav-link ml-auto" href="{{ route('login') }}">Login</a></li>
                      <li>   <a  class="nav-link ml-auto" href="{{ route('register') }}">Register</a></li>

                @else
                        <li class="dropdown">
                          <a class="nav-link" href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>


                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                            Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                          </form>
                            </li>
                              </ul>
                                </li>
                @endif
        </nav>
      </div>
    </div>
