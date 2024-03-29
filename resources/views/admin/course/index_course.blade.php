@extends('admin.layouts.app')

@section('content')

<div class="page-wrapper">
   <div class="page-content">
       <!--breadcrumb-->
       <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
           <div class="breadcrumb-title pe-3">FDT admin</div>
           <div class="ps-3">
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb mb-0 p-0">
                       <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                       </li>
                       <li class="breadcrumb-item active" aria-current="page">course list</li>
                   </ol>
               </nav>
           </div>
           <div class="ms-auto">
               <div class="btn-group">
                   <!-- Button trigger modal -->
                   <a href="{{ route('create.course') }}" type="button" class="btn btn-primary" ><i class="fadeIn animated bx bx-plus"></i> Add New course</a>
               </div>
           </div>
       </div>
       <!--end breadcrumb-->

  @if(session('success'))
  <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
       <div class="d-flex align-items-center">
           <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
           </div>
           <div class="ms-3">
               <h6 class="mb-0 text-white">Success</h6>
               <div class="text-white">{{ session('success') }}</div>
           </div>
       </div>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
  @endif 
  @if(session('wrong'))
  <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
      <div class="d-flex align-items-center">
          <div class="font-35 text-dark"><i class='bx bx-info-circle'></i>
          </div>
          <div class="ms-3">
               <h6 class="mb-0 text-white">Wrong</h6>
              <div class="text-dark">{{ session('wrong') }}</div>
          </div>
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

       <h6 class="mb-0 text-uppercase">List of courses</h6>
       <hr/>

       <div class="card">
           <div class="card-body">
               <div class="table-responsive">
                   <table id="example2" class="table table-striped table-bordered">">
                       <thead>
                           <tr>
                               <th>Sl</th>
                               <th>Title</th>
                               <th>Description</th>
                               <th>Image</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($courses as $course)
                           <tr>
                              <td>{{ $count++ }}</td>
                              <td>{{ Str::words($course->title,'8','..') }}</td>
                              <td>{!! Str::words($course->description,'8','..') !!}</td>
                              <td><img src="{{ asset('storage/app/public/'.$course->image) }}" height="50" width="60"></td>
                              <td> 
                                 @if($course->status == 1)
                                    <a class="btn btn-primary" href="{{ route('deactive.course',$course->id) }}">Active</a>
                                 @else
                                    <a class="btn btn-warning" href="{{ route('active.course',$course->id) }}">Deactive</a>
                                 @endif
                              </td>
                              <td>
                                <!-- Large modal -->
                                 <a href="{{ route('edit.course',$course->id) }}" class="btn btn-primary"><i class="bx bxs-edit"></i></a>
                                 <a href="{{ route('delete.course',$course->id) }}" class="btn btn-xs waves-effect waves-light btn-danger" id="delete"><i class="lni lni-trash"></i></a>
                                <!-- Small modal -->
                              </td>
                            <!-- Button trigger modal -->
                          </tr>

                          @endforeach
                       </tbody>
                       <tfoot>
                           <tr>
                               <th>Sl</th>
                               <th>Title</th>
                               <th>Description</th>
                               <th>Image</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                       </tfoot>
                   </table>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
