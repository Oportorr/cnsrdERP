/*=========================================================================================
    File Name: datatables-script.js
    Description: All tables
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 3.0
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function() {

/******************************************
*       js of Basic initialisation        *
******************************************/

$('.data-basic-initialisation').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );
$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('my-1');

/***********************************
*       js of Custom button        *
***********************************/

$('.data-custom-button').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        {
            text: 'My button',
            className: 'my-1',
            action: function ( e, dt, node, config ) {
                alert( 'Button activated' );
            }
        }
    ]
} );


/*********************************
*       js of Class names        *
*********************************/

$('.data-class-names').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        {
            text: 'Red',
            className: 'red btn btn-secondary my-1',
        },
        {
            text: 'Orange',
            className: 'orange btn btn-secondary my-1',
        },
        {
            text: 'Green',
            className: 'green btn btn-secondary my-1',
        }
    ]
} );

/*****************************************
*       js of Keyboard activation        *
*****************************************/

$('.data-keyboard-activation').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        {
            text: 'Button <u>1</u>',
            className: 'my-1',
            key: '1',
            action: function ( e, dt, node, config ) {
                alert( 'Button 1 activated' );
            }
        },
        {
            text: 'Button <u><i>alt</i> 2</u>',
            className: 'my-1',
            key: {
                altKey: true,
                key: '2'
            },
            action: function ( e, dt, node, config ) {
                alert( 'Button 2 activated' );
            }
        }
    ]
} );

/***************************************
*       Multi-level collections        *
***************************************/

$('.data-multi-level').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'collection',
            text: 'Table control',
            className: 'my-1',
            buttons: [
                'colvis',
                {
                    text: 'Toggle start date',
                    className: 'my-1',
                    action: function ( e, dt, node, config ) {
                        dt.column( -2 ).visible( ! dt.column( -2 ).visible() );
                    }
                },
                {
                    text: 'Toggle salary',
                    className: 'my-1',
                    action: function ( e, dt, node, config ) {
                        dt.column( -1 ).visible( ! dt.column( -1 ).visible() );
                    }
                }
            ]
        }
    ]
} );

/********************************************
*       js of Multiple button groups        *
********************************************/

var tableMultiple = $('.data-multiple-buttongroups').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        {
            text: 'Button 1',
            className: 'my-1',
            action: function ( e, dt, node, config ) {
                alert( 'Button 1 clicked on' );
            }
        }
    ]
} );

new $.fn.dataTable.Buttons( tableMultiple, {
    buttons: [
        {
            text: 'Button 2',
            className: 'my-1',
            action: function ( e, dt, node, conf ) {
                alert( 'Button 2 clicked on' );
            }
        },
        {
            text: 'Button 3',
            className: 'my-1',
            action: function ( e, dt, node, conf ) {
                alert( 'Button 3 clicked on' );
            }
        }
    ]
} );

tableMultiple.buttons( 1, null ).container().appendTo(
    tableMultiple.table().container()
);

/*********************************
*       js of Page length        *
*********************************/

$('.data-page-length').DataTable( {
    dom: 'Bfrtip',
    className: 'my-1',
    lengthMenu: [
        [ 10, 25, 50, -1 ],
        [ '10 rows', '25 rows', '50 rows', 'Show all' ]
    ],
    buttons: [
        'pageLength'
    ]
} );



} );