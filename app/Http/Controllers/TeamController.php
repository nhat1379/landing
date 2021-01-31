<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function fields() {
        return [
            'name' => [
                'type' => 'text',
                'label' => 'Tên thành viên',
                'required' => true
            ],
            'avatar' => [
                'type' => 'image',
                'label' => 'Ảnh đại diện',
                'required' => true
            ],
            'position' => [
                'type' => 'text',
                'label' => 'Chức vụ',
                'required' => true
            ],
            'department' => [
                'type' => 'text',
                'label' => 'Phòng ban',
                'required' => true
            ],
            'experience' => [
                'type' => 'number',
                'label' => 'Số năm kinh nghiệm',
                'required' => true
            ],
            'email' => [
                'type' => 'email',
                'label' => 'Địa chỉ E-mail',
                'required' => true
            ],
            'phone' => [
                'type' => 'text',
                'label' => 'Số điện thoại',
                'required' => true
            ],
            'twitter' => [
                'type' => 'text',
                'label' => 'Đường dẫn Twitter'
            ],
            'facebook' => [
                'type' => 'text',
                'label' => 'Đường dẫn Facebook'
            ],
            'youtube' => [
                'type' => 'text',
                'label' => 'Đường dẫn Youtube'
            ],
            'instagram' => [
                'type' => 'text',
                'label' => 'Đường dẫn Instagram'
            ],
            'desc' => [
                'type' => 'textarea',
                'label' => 'Mô tả'
            ],
            'status' => [
                'type' => 'select',
                'label' => 'Trạng thái',
                'required' => true,
                'items' => [
                    ['id' => 1, 'label' => 'Hoạt động'],
                    ['id' => 0, 'label' => 'Không hoạt động']
                ]
            ]
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Team::latest()->get();

        return view('BE.team.list', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new Team();
        $fields = $this->fields();

        return view('BE.team.edit', compact('team', 'fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('teams', 'public');
        }

        $team = new Team();
        $team->fill($data)->save();

        return redirect()->route('be.teams.index')->with('success_notify', 'Thêm nhân viên thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $fields = $this->fields();

        return view('BE.team.edit', compact('team', 'fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $data = $request->except('_token');

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('teams', 'public');
        }

        $team->fill($data)->save();

        return redirect()->route('be.teams.index')->with('success_notify', 'Cập nhật nhân viên thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::findOrFail($id)->delete();

        return redirect()->route('be.teams.index')->with('success_notify', 'Xóa nhân viên thành công!');
    }
}
