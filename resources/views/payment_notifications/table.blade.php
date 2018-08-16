<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>ประเภทบริการ</th>
            <th>ชื่อบริษัท</th>
            <th>ชื่อบริษัท</th>
            <th>เบอร์โทรศัพท์</th>
            <th>ธนาคารที่ชำระเงิน</th>
            <th>จำนวนเงิน</th>
            <th>รายละเอียดเพิ่มเติม</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($paymentNotifications as $paymentNotification)
        <tr>
            <td>{!! $paymentNotification->service_type !!}</td>
            <td>{!! $paymentNotification->companyname !!}</td>
            <td>{!! $paymentNotification->email !!}</td>
            <td>{!! $paymentNotification->phone !!}</td>
            <td>{!! $paymentNotification->bankname !!}</td>
            <td>{!! $paymentNotification->money !!}</td>
            <td>{!! $paymentNotification->details !!}</td>
            <td>
                {!! Form::open(['route' => ['paymentNotifications.destroy', $paymentNotification->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    <a href="{!! route('paymentNotifications.markread', [$paymentNotification->id]) !!}" class='btn btn-info btn-xs {{ $paymentNotification->read==false ?: 'disabled' }}'>
                        {{ $paymentNotification->read==false ? 'Mark as Read': 'Readed' }}
                      </a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>