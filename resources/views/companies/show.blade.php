@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')

    <div class="card">
      <div class="card-header">
        <div class="row">
            <div class="col-8 text-left">
              <h3 class="card-title display">ชื่อบริษัท: {{ $company->companyname }}</h3>
            </div>
            <div class="col-4 text-right">
                @if($company->image)
                  <img src="data:image/jpg;charset=utf8;base64,{!! $company->image !!}"  width="80" style="hight: auto;" class="rounded-circle">
                  @else
                  <img src="{{url('/images/default_company.png')}}"  height="80" width="80"  class="rounded-circle">
                @endif
            </div>
        </div>
      </div>
      <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <td><strong>ประเภทธุรกิจ</strong></td>
                <td>{{ $company->companytype ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>ปีที่ก่อตั้ง</strong></td>
                <td>{{ $company->start_year ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>จำนวนพนักงาน</strong></td>
                <td>{{ $company->worker_count ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>ลักษณะธุรกิจ</strong></td>
                <td>{{ $company->details ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>ที่อยู่</strong></td>
                <td>{{ $company->address ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>อีเมล์</strong></td>
                <td>{{ $company->email ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>เบอร์โทรศัพท์</strong></td>
                <td>{{ $company->phone ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>ติดต่อคุณ</strong></td>
                <td>{{ $company->fullname_contact ?: "-" }}</td>
              </tr>
              <tr>
                <td><strong>ตำแหน่ง</strong></td>
                <td>{{ $company->position_contact ?: "-" }}</td>
              </tr>
            </tbody>
          </table>

          <hr>

          <h3><i class="fas fa-map-marked-alt"></i> Google Map</h3>
          @if(isSet($company->map_embed ))
            <div class="col iframe-container">
              {!! $company->map_embed !!}
            </div>
          @else
            <div class="col">
              <p>ไม่มี Google Map</p>
            </div>
          @endif

          
          

      </div>
    </div>


@endsection


<style>
.iframe-container{
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
}
.iframe-container > *{
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
}
</style>
