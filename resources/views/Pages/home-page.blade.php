@extends('layout.default')
@extends('Pages.page-bar')

@section('page-content')
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Address</th>
                <th>Quantity</th>
                <th>Tax</th>
                <th>Discount</th>
                <th>Unit price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                </td>
                <td>25</td>
                <td>$1.00</td>
                <td>$0.90</td>
                <td>$12.90</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                </td>
                <td>50</td>
                <td>$1.00</td>
                <td>$0.90</td>
                <td>$1.25</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)
                </td>
                <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                </td>
                <td>10</td>
                <td>$1.00</td>
                <td>$0.90</td>
                <td>$2.35</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                </td>
                <td>25</td>
                <td>$1.00</td>
                <td>$0.90</td>
                <td>$12.90</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                </td>
                <td>50</td>
                <td>$1.00</td>
                <td>$0.90</td>
                <td>$1.25</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)
                </td>
                <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                </td>
                <td>10</td>
                <td>$1.00</td>
                <td>$0.90</td>
                <td>$2.35</td>
            </tr>
        </tbody>
</table>

@endsection
