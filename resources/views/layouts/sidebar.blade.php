<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      @foreach($archives as $arc)
        <li><a href="/home/?month={{ $arc['month'] }}&year={{ $arc['year'] }}"> {{ $arc['month'] }} {{ $arc['year']}}</a></li>
        @endforeach
    </ol>
  </div>


  <div class="sidebar-module">
    <h4>contact me</h4>
    <ol class="list-unstyled">
      <li><a target="_blank" href="https://www.facebook.com/Cando0">Facebook</a></li>
      <li><a target="_blank" href="https://www.linkedin.com/in/hossam-el-hwary-336441b7/">LinkedIn</a></li>
      <li><a target="_blank" href="https://github.com/hussamEL-Hwary">GitHub</a></li>
      <li><a target="_blank" href="https://www.quora.com/profile/Hossam-Elhwary">Quora</a></li>

    </ol>
  </div>
</div><!-- /.blog-sidebar -->
