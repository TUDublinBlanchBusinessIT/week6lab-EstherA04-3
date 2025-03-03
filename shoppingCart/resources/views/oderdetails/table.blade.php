<table class="table table-responsive" id="oderdetails-table">
    <thead>
        <th>Productid</th>
        <th>Orderid</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($oderdetails as $oderdetail)
        <tr>
            <td>{!! $oderdetail->productid !!}</td>
            <td>{!! $oderdetail->orderid !!}</td>
            <td>{!! $oderdetail->quantity !!}</td>
            <td>{!! $oderdetail->subtotal !!}</td>
            <td>
                {!! Form::open(['route' => ['oderdetails.destroy', $oderdetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('oderdetails.show', [$oderdetail->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('oderdetails.edit', [$oderdetail->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>