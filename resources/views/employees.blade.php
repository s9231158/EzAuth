@foreach($employees as $employee)
                <table border="1">
                    <tr>

                        <td>name</td>
                        <td>email</td>
                        <td>address</td>
                        <td>操作</td>
                        
                    </tr>
                    <tr>    
                        
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->address }}</td>
                        <td><a href="{{route('getemployee' , ['employee'=>$employee->id])}}">修改</a>
</td>
                    </tr>
                </table>
@endforeach