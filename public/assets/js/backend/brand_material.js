define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'brand_material/index' + location.search,
                    add_url: 'brand_material/add/',
                    edit_url: 'brand_material/edit',
                    del_url: 'brand_material/del',
                    multi_url: 'brand_material/multi',
                    import_url: 'brand_material/import',
                    table: 'brand_material',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                queryParams: function (params) {
                    // 自定义搜索条件
                    var filter = params.filter ? JSON.parse(params.filter) : {};
                    var op = params.op ? JSON.parse(params.op) : {};
                    //filter.后跟的是在ajax里使用的名称只需修改这两行
                    filter.brand_id = Config.brand_id;
                    //op后跟的也是ajax里使用的名称，后面是条件
                    op.brand_id = '=';
                    params.filter = JSON.stringify(filter);
                    params.op = JSON.stringify(op);
                    return params;
                },
                columns: [
                    [
                        {checkbox: true},
                        {field: 'brand_id', title: __('品牌'),searchList: Config.brandList,formatter: Table.api.formatter.label},
                        {field: 'content', title: __('Content'), operate: 'LIKE'},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
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