@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif  
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-hovered">
                
            </table>
            <div class="table-responsive">
                <table class="table table-striped-columns
                table-hover	
                table-bordered
                table-primary
                align-middle" id="thoAll">
                    <thead class="table-light">
                        <caption>Trang thông tin giới thiệu thợ</caption>
                        <tr>
                            <th>STT</th>
                            <th>Mã</th>
                            <th>Tên</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr class="table-primary" >
                                <td scope="row">Item</td>
                                <td>Item</td>
                                <td>Item</td>
                            </tr>
                            <tr class="table-primary">
                                <td scope="row">Item</td>
                                <td>Item</td>
                                <td>Item</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                </table>
            </div>
            
        </div>
    </div>
</div>
@endsection
@section('scripts')
    
@endsection
