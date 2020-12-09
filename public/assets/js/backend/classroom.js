define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'classroom/index' + location.search,
                    add_url: 'classroom/add',
                    edit_url: 'classroom/edit',
                    del_url: 'classroom/del',
                    multi_url: 'classroom/multi',
                    import_url: 'classroom/import',
                    table: 'classroom',
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
                        {field: 'title', title: __('Title'), operate: 'LIKE'},
                        {field: 'image', title: __('Image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate,buttons: [
                                {
                                    name: 'classroom_content',
                                    text: __('查看课堂'),
                                    title: __('查看课堂'),
                                    classname: 'btn btn-xs btn-info btn-addtabs',
                                    url: 'classroom_content/index',
                                    visible: function (row) {
                                        return true;
                                        //返回true时按钮显示,返回false隐藏
                                    },
                                    success:function (data,ret) {
                                        $(".btn-refresh").trigger("click");
                                    }
                                }
                                ]
                        }

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