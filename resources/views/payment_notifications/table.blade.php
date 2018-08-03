<table class="table table-responsive" id="paymentNotifications-table">
    <thead>
        <tr>
            <th>Service Type</th>
        <th>Companyname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Bankname</th>
        <th>Money</th>
        <th>Details</th>
            <th colspan="3">Action</th>
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
                    <a href="{!! route('paymentNotifications.show', [$paymentNotification->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('paymentNotifications.edit', [$paymentNotification->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>