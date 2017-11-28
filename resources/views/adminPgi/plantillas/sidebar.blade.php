<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    @if (! Auth::guest())
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      @endif
      <!-- search form (Optional) -->
      <form action="{{ route('Articulo.index')}}" method="GET" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="titulo" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
              <button type="submit"  class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        
        <!-- Categorias -->
        <li class="treeview">
          <a href="#"><i class=" glyphicon glyphicon-th-large"></i> <span>Categorias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('categorias.create') }}">Agregar categoria</a></li>
            <li><a href="{{ route('categorias.index') }}">listar categorias </a></li>
          </ul>
        </li>
        <!--Usuarios  -->
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/users/create') }}">Registrar usuario</a></li>
            <li><a href="{{ url('admin/users')}}"> listar usuarios</a></li>
          </ul>
        </li>
        <!--Utags  -->
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-th-large"></i> <span>Tags</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('tags.create') }}">Registrar Tag</a></li>
            <li><a href="{{ route('tags.index')}}"> listar usuarios</a></li>
          </ul>
        </li>
        <!--Articulo  -->
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-qrcode"></i> <span>Articulo</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('Articulo.create') }}">Registrar Articulo</a></li>
            <li><a href="{{ route('Articulo.index')}}"> listar Articulo</a></li>
          </ul>
        </li>
        <!--imagnes -->
        <li>
          <a href="{{ route('imagen.index')}}"><i class="glyphicon glyphicon-picture"></i><span>Imagene</span></a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>