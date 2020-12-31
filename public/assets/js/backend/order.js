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
                search:false,
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'order_no', title: __('Order_no'), operate: 'LIKE'},
                        {field: 'user_id', title: __('User_id'), formatter: Table.api.formatter.flag,searchList:Config.userList},
                        {field: 'store_id', title: __('Store_id'),formatter: Table.api.formatter.flag,searchList:Config.storeList},
                        {field: 'real_price', title: __('Real_price'), operate:'BETWEEN'},
                        {field: 'yunfei_price', title: __('Yunfei_price'), operate:'BETWEEN'},
                        {field: 'username', title: __('Username'), operate: 'LIKE'},
                        {field: 'phone', title: __('Phone')},
                        {field: 'address', title: __('Address'), operate: 'LIKE'},
                        {field: 'status', title: __('Status') ,operate: 'LIKE', formatter: Table.api.formatter.status,searchList:{"-1":"已取消","0":"待付款","1":"待发货","2":"已发货","3":"已完成"}},
                        {field: 'after_sales', title: __('After_sales'),formatter: Table.api.formatter.status,searchList:{"0":"无售后","1":"审核中","2":"未通过","3":"已通过","4":"已退款"}},
                        {field: 'wph_order_no', title: __('Wph_order_no'), operate: 'LIKE'},
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