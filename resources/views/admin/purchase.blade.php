@extends('admin.app')

@section('content')

  <div class="container mar-top-25">

    <div class="col center-align">
      <h3>จัดการประวัติการชำระเงิน</h3>
      <a href="" class="btn">โหลดใหม่</a>
      <button class="print-btn btn">พิมพ์</button>
    </div>

    {{--  HIDE/SHOW CHECKBOXES  --}}
    <div class="col check-box-container">
      <table>
        <thead>
          <tr>
            <td>
              <input type="checkbox" class="filled-in" id="0" checked="checked" />
              <label for="0">ID</label>
            </td>
            <td>
              <input type="checkbox" class="filled-in" id="1" checked="checked" />
              <label for="1">Payment</label>
            </td>
            <td>
              <input type="checkbox" class="filled-in" id="2" checked="checked" />
              <label for="2">Status</label>
            </td>
            <td>
              <input type="checkbox" class="filled-in" id="3" checked="checked" />
              <label for="3">Created Date</label>
            </td>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  {{--  DATA TABLE  --}}
  <div id="print-content" class="w90 auto-margin white" style="overflow: auto;">
    <table class="bordered responsive-table" id="myTable">
      <thead>
        <tr>
          <th class="0" onclick="sortTable(0)">Purchase_ID</th>
          <th class="0" onclick="sortTable(1)">User_ID</th>
          <th class="1" onclick="sortTable(2)">Payment_Type</th>
          <th class="1" onclick="sortTable(3)">Total_Price</th>
          <th class="2" onclick="sortTable(4)">Status</th>
          <th class="3" onclick="sortTable(5)">Created_Date</th>
        </tr>   
      </thead>

      <tbody>
        @foreach($data as $purchase)
          <tr>
            <td class="0 tooltipped" data-tooltip="{{ $purchase->id }}">{{ $purchase->id }}</td>
            <td class="0 tooltipped" data-tooltip="{{ $purchase->student_id }}">{{ $purchase->student_id }}</td>
            <td class="1 tooltipped" data-tooltip="{{ $purchase->payment_type }}">{{ $purchase->payment_type }}</td>
            <td class="1 tooltipped" data-tooltip="{{ $purchase->sum_price }}">{{ $purchase->sum_price }}</td>
            <td class="2 tooltipped" data-tooltip="{{ $purchase->status }}">{{ $purchase->status }}</td>
            <td class="3 tooltipped" data-tooltip="{{ $purchase->created_at }}">{{ $purchase->created_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    {{--  SEARCH COURSE MODAL  --}}
    <div id="modal3" class="modal" style="width:650px; overflow:hidden;">
      <div class="modal-content">
        <h4 class="center-align">Search Course</h4>
        <form method="POST">
          {{ csrf_field() }}

          <div class="input-field col">
            <label for="course_id" class="active">Course_ID</label>
            <input type="text" name="course_id">
          </div>

          <div class="input-field col">
            <label for="slug" class="active">Slug</label>
            <input type="text" name="slug">
          </div>

          <div class="input-field col">
            <label for="promotion_id" class="active">Promotion_ID</label>
            <input type="text" name="promotion_id">
          </div>

          <div class="center-align mar-top-25">
            <button type="submit" style="margin-top:10px; margin-bottom:10px; width:255px;" 
              class="btn btn-submit waves-effect">
              Submit
            </button> 
          </div>
        </form>
      </div>
    </div>

    <div class="center-align">
      {{ $data->links() }}
    </div>
  </div>

@endsection