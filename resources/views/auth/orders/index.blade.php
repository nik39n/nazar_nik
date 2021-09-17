@extends('auth.layouts.master')
@section ('title' , 'Заказы')
@section('content')
    <div class="col-md-12">
        <h1>Заказы</h1>
        <div class="table-responsive-sm">
            <table class="table">
                <tbody>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Имя
                    </th>
                    <th>
                        Телефон
                    </th>
                    <th>
                        Когда отправлен
                    </th>
                    <th>
                        Сумма
                    </th>
                    <th>
                        Действия
                    </th>
                </tr>
                
                    
                </tbody>
            </table>    
        </div>
    </div>
@endsection
