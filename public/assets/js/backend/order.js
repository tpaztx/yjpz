define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'order/index' + location.search,
                    add_url: 'order/add',
                    edit_url: 'order/edit',
                    del_url: 'order/del',
                    multi_url: 'order/multi',
                    import_url: 'order/import',
                    table: 'order',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'order_no', title: __('Order_no'), operate: 'LIKE'},
                        {field: 'user_id', title: __('User_id')},
                        {field: 'store_id', title: __('Store_id')},
                        {field: 'total_price', title: __('Total_price'), operate:'BETWEEN'},
                        {field: 'real_price', title: __('Real_price'), operate:'BETWEEN'},
                        {field: 'yunfei_price', title: __('Yunfei_price'), operate:'BETWEEN'},
                        {field: 'get_price', title: __('Get_price'), operate:'BETWEEN'},
                        {field: 'username', title: __('Username'), operate: 'LIKE'},
                        {field: 'phone', title: __('Phone')},
                        {field: 'address', title: __('Address'), operate: 'LIKE'},
                        {field: 'time', title: __('Time'), operate: 'LIKE'},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'type', title: __('Type'), operate: 'LIKE'},
                        {field: 'status', title: __('Status')},
                        {field: 'after_sales', title: __('After_sales')},
                        {field: 'return_price', title: __('Return_price'), operate:'BETWEEN'},
                        {field: 'return_company', title: __('Return_company'), operate: 'LIKE'},
                        {field: 'return_no', title: __('Return_no')},
                        {field: 'transaction_no', title: __('Transaction_no')},
                        {field: 'wph_order_no', title: __('Wph_order_no'), operate: 'LIKE'},
                        {field: 'carriersCode', title: __('Carrierscode'), operate: 'LIKE'},
                        {field: 'proportion', title: __('Proportion'), operate:'BETWEEN'},
                        {field: 'commission1', title: __('Commission1'), operate:'BETWEEN'},
                        {field: 'commission2', title: __('Commission2'), operate:'BETWEEN'},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});