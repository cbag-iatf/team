<div class="card">
    <div class="card-body table-responsive mt-3">
        <table class="table  table-bordered mt-2" id="PermissionTableSelecta1">
            <thead>
                <tr>
                    <th scope="col">Name</th>
  
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                    <td class="d-flex justify-content-between gap-1">
                        <td class="d-flex justify-content-between gap-1">
                            <a href="#" onclick="selectPersoModal('{{ $field }}','{{ $permission }}',['id','name'], 'select{{ $field }}')"
                            class="btn btn-sm btn-outline-primary">{{ __('button.select') }}</a>
                        </td>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
showJdatatable('#PermissionTableSelecta1'," @lang('datatables.search') "," @lang('datatables.lengthMenu') ",
            " @lang('datatables.emptyTable') "," @lang('datatables.first') ", " @lang('datatables.previous') ",
            " @lang('datatables.next') ", " @lang('datatables.last')",2);
</script>
