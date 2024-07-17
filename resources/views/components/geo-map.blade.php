<div>
    <div>GeoMap</div>
    <table class="table-auto">
        <tbody>
            @for ($y = 0; $y < count($geomap); $y++)
                <tr>
                    @for ($x = 0; $x < count($geomap[$y]); $x++)
                        <td class="border">
                            {{ $geomap[$y][$x]?->owner->display_name }}
                        </td>
                    @endfor
                </tr>
            @endfor
        </tbody>
    </table>
</div>
