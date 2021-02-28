<table id="{{$id}}" class="table table-bordered table-hover">
    <thead>
    <tr>
        @foreach($headers as $header)
            <th>{{ $header }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
        <tr>
            @foreach($row as $col)
                <td>{{$col}}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        @foreach($headers as $header)
            <th>{{ $header }}</th>
        @endforeach
    </tr>
    </tfoot>
</table>

@section('scripts')
    @parent
    <script type="text/javascript">
        $(function () {
            $("#{{$id}}").DataTable();
        });
    </script>
@endsection
