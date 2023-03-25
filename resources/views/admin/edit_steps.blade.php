@extends('layouts.layout')
@section('title', 'Edit Steps')
@section('content')
@include('layouts.navigations.admin_nav')
<!-- Page Sidebar Ends-->
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-default-sec">
      <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Панель редактирование этапов</h5>
                    <span></span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="u-pearl done col-2">
                          <div class="u-pearl-icon">1</div><span class="u-pearl-title">Антиплагиат</span>
                        </div>
                        <div class="u-pearl done col-2">
                          <div class="u-pearl-icon">2</div><span class="u-pearl-title">Эксперт РИС</span>
                        </div>
                        <div class="u-pearl done col-2">
                          <div class="u-pearl-icon">3</div><span class="u-pearl-title">Заседание РИС</span>
                        </div>
                        <div class="u-pearl done col-2">
                          <div class="u-pearl-icon">4</div><span class="u-pearl-title">Эксперт УМС</span>
                        </div>
                        <div class="u-pearl done col-2">
                          <div class="u-pearl-icon">5</div><span class="u-pearl-title">Заседание УМС</span>
                        </div>
                        <div class="u-pearl done col-2">
                            <div class="u-pearl-icon">6</div><span class="u-pearl-title">Издание</span>
                          </div>
                      </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
  <!-- footer start-->
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 footer-copyright">
          <p class="mb-0">Copyright 2022-23 © Quadronic All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
@endsection