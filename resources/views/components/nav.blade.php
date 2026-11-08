<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @foreach ($items as $item)
              <li class="nav-item">
                <a href="{{ route($item['route']) }}"
                class="nav-link {{ request()->routeIs($item['route'])?'active':'' }}"
                >
                <i class="nav-icon {{$item['icon']}}"></i>
                <p>{{ $item['title'] }}</p>
                </a>
              </li>
          @endforeach
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="m-0">
              @csrf
              <button type="submit" class="nav-link text-danger"
               style="
                  background: none; border: none; text-align: right; width: 100%; display: flex; align-items: center;               
                  ">
                <i class="nav-icon fas fa-sign-out-alt ml-2"></i>
                <p class="m-0">تسجيل الخروج</p>
              </button>
            </form>
          </li>
        </ul>
</nav>
