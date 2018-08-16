<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
        <th>ชื่อ-สกุล</th>
        <th>เพศ</th>
        <th>ที่อยู่</th>
        <th>มือถือ</th>
        <th>งานที่สนใจ</th>
        <th>คำค้นหา</th>
        <th>เงินเดือนที่ต้องการ</th>
        <th>ช่วงเวลาทำงาน</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($memberProfiles as $memberProfile)
        <tr>
            <td>{!! $memberProfile->fullname !!}</td>
            <td>{!! $memberProfile->gender !!}</td>
            <td>{!! $memberProfile->address !!}</td>
            <td>{!! $memberProfile->phone !!}</td>
            <td>{!! $memberProfile->interested_job !!}</td>
            <td>{!! $memberProfile->type_interested_job !!}</td>
            <td>{!! $memberProfile->money_need !!}</td>
            <td>{!! $memberProfile->work_time !!}</td>
            <td>
                {!! Form::open(['route' => ['memberProfiles.destroy', $memberProfile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>