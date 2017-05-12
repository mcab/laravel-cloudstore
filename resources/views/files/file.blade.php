<tr>
    <td><span class="text-overflow">{{ $file->name }}</span></td>
    <td>{{ $file->description }}</td>
    <td>{{ $file->created_at->toFormattedDateString() }}</td>
    <td class="text-right"><span class="glyphicon glyphicon-save" aria-hidden="true"></span></td>
</tr>
