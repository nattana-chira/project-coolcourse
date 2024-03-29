@extends('admin.app')

@section('content')

  <div class="container mar-top-25">

    <div class="col center-align">
      <h3>จัดการรายงานการละเมิด</h3>
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
              <label for="0">รหัสคอร์ส</label>
            </td>
            <td>
              <input type="checkbox" class="filled-in" id="1" checked="checked" />
              <label for="1">รหัสผู้ใช้</label>
            </td>
            <td>
              <input type="checkbox" class="filled-in" id="2" checked="checked" />
              <label for="2">รายงานการละเมิด</label>
            </td>
            <td>
              <input type="checkbox" class="filled-in" id="3" checked="checked" />
              <label for="3">อื่นๆ</label>
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
          <th class="0" onclick="sortTable(0)">รหัสคอร์ส</th>
          <th class="1" onclick="sortTable(1)">รหัสผู้ใช้</th>
          <th class="2" onclick="sortTable(2)">รายงานการละเมิด</th>
          <th class="2" onclick="sortTable(3)">ความคิดเห็น</th>
          <th class="3" onclick="sortTable(4)">วันที่สร้าง</th>
        </tr>   
      </thead>

      <tbody>
        @foreach($data as $report)
          <tr>
            <td class="0 tooltipped" data-tooltip="{{ $report->course_id }}">{{ $report->course_id }}</td>
            <td class="1 tooltipped" data-tooltip="{{ $report->student_id }}">{{ $report->student_id }}</td>
            <td class="2 tooltipped" data-tooltip="{{ $report->abuse_type }}">{{ $report->abuse_type }}</td>
            <td class="2 tooltipped" data-tooltip="{{ $report->commet }}">{{ $report->comment }}</td>
            <td class="3 tooltipped" data-tooltip="{{ $report->created_at }}">{{ $report->created_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="center-align">
      {{ $data->links() }}
    </div>
  </div>

@endsection