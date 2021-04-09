@extends('layouts.master')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <a href="{{route('create.producte')}}">Add Producte</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>Show <select name="dataTable_length" aria-controls="dataTable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                                      class="form-control form-control-sm"
                                                                                                      placeholder=""
                                                                                                      aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                   role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                                <tr>
                                    <th rowspan="1" colspan="1">Name_Category</th>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">price</th>
                                    <th rowspan="1" colspan="1">image</th>
                                    <th rowspan="1" colspan="1">type</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>

                                <tbody>
                                @foreach($productes as $producte)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$producte->category->name}}</td>
                                    <td>{{$producte->name}}</td>
                                    <td>{{$producte->price}}</td>
                                    <td><img style="width: 100px" class="media-object" src="{{asset('storage/'.$producte->image)}}"></td>
                                    <td>{{$producte->type}}</td>
                                    <td> <a href="{{route('edit.producte',['id'=>$producte->id])}}" class="btn btn-dark "><i
                                                class="fa fa-pencil"></i>Edit</a>
                                      <a href="{{route('delete',$producte->id)}}}"class="btn btn-danger btn-icon-anim "><i
                                                class="icon-trash"></i>Delete</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
