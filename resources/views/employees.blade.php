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
                        <td>地址</td>
                        <td><a href="">修改</a>
</td>
                    </tr>
                </table>
@endforeach