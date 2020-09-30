@extends('Admin.admin-lte')
@section('page_title')
Tool Manager
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid mt-1">
            <h3 class="text-muted">Tools</h3>
            <div class="card mb-4">

                <div class="card-header">
                    <a class=" btn btn-md btn-primary float-left" href="/create-new-toolkit">Create a New Toolkit</a>

                    <button class=" btn btn-sm btn-primary float-right">Go Back</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Toolkit Name</th>
                                    <th>Warehouse</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                    <th>Modified</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Img</th>
                                    <th>Code</th>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Unit</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($tools as $key => $item)
                                <tr>
                                    <td><a>{{ $key+1 }}</a></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->warehouse }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <a href="/edit-tool/{{ $item->id }}"
                                            class="btn btn-small btn-warning text-white">Edit</a>
                                        <button class="btn btn-small btn-default">Delete</button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <a href="" class="btn btn-primary btn-sm text-white"><i class="fa fa-download"
                            style="color: gray"></i> Generate Report</a>
                </div>
            </div>
            <!-- End of Content Wrapper -->

        </div>

        <div class="container mt-2">

        </div>

    </div>
</div>


@endsection
