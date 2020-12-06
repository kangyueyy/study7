@extends('datarecord/oaupdate/layout')

@section('content')
<!-- Container -->
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        {{--<div class="small-nav">--}}
            {{--<a href="#">Dashboard</a>--}}
            {{--<span>&gt;</span>--}}
            {{--Current Articles--}}
        {{--</div>--}}
        <!-- End Small Nav -->

        <!-- Message OK -->
        {{--<div class="msg msg-ok">--}}
            {{--<p><strong>Your file was uploaded succesifully!</strong></p>--}}
            {{--<a href="#" class="close">close</a>--}}
        {{--</div>--}}
        <!-- End Message OK -->

        <!-- Message Error -->
        {{--<div class="msg msg-error">--}}
            {{--<p><strong>You must select a file to upload first!</strong></p>--}}
            {{--<a href="#" class="close">close</a>--}}
        {{--</div>--}}
        <!-- End Message Error -->
        {{--<br />--}}
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>

            <!-- Content -->
            <div id="content">

                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">列表</h2>
                        {{--<div class="right">--}}
                            {{--<label>search articles</label>--}}
                            {{--<input type="text" class="field small-field" />--}}
                            {{--<input type="submit" class="button" value="search" />--}}
                        {{--</div>--}}
                    </div>
                    <!-- End Box Head -->

                    <!-- Table -->
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>版本号</th>
                                <th>更新内容</th>
                                <th>更新日期</th>
                                <th>更新人</th>
                                {{--<th width="110" class="ac">Content Control</th>--}}
                            </tr>
                            @foreach($lists as $list)
                            <tr>
                                <td><h3><span>{{$list->ver}}</span></h3></td>
                                <td><h3><a href="#">{{$list->content}}</a></h3></td>
                                <td>{{$list->created_at}}</td>
                                <td><span>Administrator</span></td>
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            </tr>
                            @endforeach
                            {{--<tr class="odd">--}}
                                {{--<td><input type="checkbox" class="checkbox" /></td>--}}
                                {{--<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>--}}
                                {{--<td>12.05.09</td>--}}
                                {{--<td><a href="#">Administrator</a></td>--}}
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td><input type="checkbox" class="checkbox" /></td>--}}
                                {{--<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>--}}
                                {{--<td>12.05.09</td>--}}
                                {{--<td><a href="#">Administrator</a></td>--}}
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            {{--</tr>--}}
                            {{--<tr class="odd">--}}
                                {{--<td><input type="checkbox" class="checkbox" /></td>--}}
                                {{--<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>--}}
                                {{--<td>12.05.09</td>--}}
                                {{--<td><a href="#">Administrator</a></td>--}}
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td><input type="checkbox" class="checkbox" /></td>--}}
                                {{--<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>--}}
                                {{--<td>12.05.09</td>--}}
                                {{--<td><a href="#">Administrator</a></td>--}}
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            {{--</tr>--}}
                            {{--<tr class="odd">--}}
                                {{--<td><input type="checkbox" class="checkbox" /></td>--}}
                                {{--<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>--}}
                                {{--<td>12.05.09</td>--}}
                                {{--<td><a href="#">Administrator</a></td>--}}
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td><input type="checkbox" class="checkbox" /></td>--}}
                                {{--<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>--}}
                                {{--<td>12.05.09</td>--}}
                                {{--<td><a href="#">Administrator</a></td>--}}
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            {{--</tr>--}}
                            {{--<tr class="odd">--}}
                                {{--<td><input type="checkbox" class="checkbox" /></td>--}}
                                {{--<td><h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3></td>--}}
                                {{--<td>12.05.09</td>--}}
                                {{--<td><a href="#">Administrator</a></td>--}}
                                {{--<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>--}}
                            {{--</tr>--}}
                        </table>


                        <!-- Pagging -->
                        {{--<div class="pagging">--}}
                            {{--<div class="left">Showing 1-12 of 44</div>--}}
                            {{--<div class="right">--}}
                                {{--<a href="#">Previous</a>--}}
                                {{--<a href="#">1</a>--}}
                                {{--<a href="#">2</a>--}}
                                {{--<a href="#">3</a>--}}
                                {{--<a href="#">4</a>--}}
                                {{--<a href="#">245</a>--}}
                                {{--<span>...</span>--}}
                                {{--<a href="#">Next</a>--}}
                                {{--<a href="#">View all</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!-- End Pagging -->

                    </div>
                    <!-- Table -->

                </div>
                <!-- End Box -->

                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>添加记录</h2>
                    </div>
                    <!-- End Box Head -->

                    <form action="/oaupdate/ajax/create" method="post">
                        <!-- Form -->
                        <div class="form">
                            <p>
                                <span class="req">max 100 symbols</span>
                                <label>版本号 <span>(Required Field)</span></label>
                                <input type="text" class="field size1" id="ver" name="ver"/>
                            </p>
                            {{--<p class="inline-field">--}}
                                {{--<label>Date</label>--}}
                                {{--<select class="field size2">--}}
                                    {{--<option value="">23</option>--}}
                                {{--</select>--}}
                                {{--<select class="field size3">--}}
                                    {{--<option value="">July</option>--}}
                                {{--</select>--}}
                                {{--<select class="field size3">--}}
                                    {{--<option value="">2009</option>--}}
                                {{--</select>--}}
                            {{--</p>--}}

                            <p>
                                <span class="req">max 100 symbols</span>
                                <label>更新内容 <span>(Required Field)</span></label>
                                <textarea class="field size1" rows="10" cols="30" id="content" name="content"></textarea>
                            </p>

                        </div>
                        <!-- End Form -->
                        <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                        <!-- Form Buttons -->
                        <div class="buttons">
                            {{--<input type="button" class="button" value="preview" />--}}
                            <input type="submit" class="button" value="提交" />
                        </div>
                        <!-- End Form Buttons -->
                    </form>
                </div>
                <!-- End Box -->

            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            {{--<div id="sidebar">--}}

                {{--<!-- Box -->--}}
                {{--<div class="box">--}}

                    {{--<!-- Box Head -->--}}
                    {{--<div class="box-head">--}}
                        {{--<h2>Management</h2>--}}
                    {{--</div>--}}
                    {{--<!-- End Box Head-->--}}

                    {{--<div class="box-content">--}}
                        {{--<a href="#" class="add-button"><span>Add new Article</span></a>--}}
                        {{--<div class="cl">&nbsp;</div>--}}

                        {{--<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>--}}
                        {{--<p><a href="#">Delete Selected</a></p>--}}

                        {{--<!-- Sort -->--}}
                        {{--<div class="sort">--}}
                            {{--<label>Sort by</label>--}}
                            {{--<select class="field">--}}
                                {{--<option value="">Title</option>--}}
                            {{--</select>--}}
                            {{--<select class="field">--}}
                                {{--<option value="">Date</option>--}}
                            {{--</select>--}}
                            {{--<select class="field">--}}
                                {{--<option value="">Author</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<!-- End Sort -->--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Box -->--}}
            {{--</div>--}}
            {{--<!-- End Sidebar -->--}}

            <div class="cl">&nbsp;</div>
        </div>
        <!-- Main -->
    </div>
</div>
<!-- End Container -->
@endsection

