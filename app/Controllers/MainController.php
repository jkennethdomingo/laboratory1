<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    private $student;

    public function __construct()
    {
        $this->student = new \App\Models\MainModel();
        $this->section = new \App\Models\Section();
        $this->validation = \Config\Services::validation();
        helper('url');
    }

    public function index()
    {
        $sections = $this->section->findAll();
        return view('pages/home', ['currentPage' => 'home', 'currentAction' => 'insert', 'sections' => $sections]);
    }

    protected function validateStudentData()
    {
        $id = $this->request->getVar('id');
        
        $this->validation->setRules([
            'StudName' => [
                'label'  => 'Student Name',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'The {field} field is required.',
                ],
            ],
            'StudGender' => [
                'label'  => 'Gender',
                'rules'  => 'required|in_list[Male,Female,Other]',
                'errors' => [
                    'required' => 'The {field} field is required.',
                    'in_list'  => 'Please select a valid {field}.',
                ],
            ],
            'StudCourse' => [
                'label'  => 'Course',
                'rules'  => 'required|in_list[Course1,Course2,Course3]',
                'errors' => [
                    'required' => 'The {field} field is required.',
                    'in_list'  => 'Please select a valid {field}.',
                ],
            ],
            'StudSection' => [
                'label'  => 'Student Section',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'The {field} field is required.',
                ],
            ],
            'StudYear' => [
                'label'  => 'Student Year',
                'rules'  => 'required', 
                'errors' => [
                    'required' => 'The {field} field is required.',
                ],
            ],
        ]);

        if (! $this->validation->withRequest($this->request)->run()) {
            return false;
        }

        return true;
    }

    protected function validateSection()
    {
        $id = $this->request->getVar('id');
        $validationRules = [
            'Section' => [
                'label'  => 'Section Name',
                'rules'  => 'required|is_unique[table_section.Section,id,' . $id . ']',
                'errors' => [
                    'required' => 'The {field} field is required.',
                ],
            ],
        ];

        $this->validation->setRules($validationRules);

        if (!$this->validation->withRequest($this->request)->run()) {
            return false;
        }

        return true; 
    }


    public function save()
    {
        $id = $this->request->getVar('id');
        $data = [
            'StudName' => $this->request->getVar('StudName'),
            'StudGender' => $this->request->getVar('StudGender'),
            'StudCourse' => $this->request->getVar('StudCourse'),
            'StudSection' => $this->request->getVar('StudSection'),
            'StudYear' => $this->request->getVar('StudYear'),
        ];
        
        $sections = $this->section->findAll();

        if ($this->validateStudentData()) {
            if ($id) {
                $this->student->update($id, $data);
            } else {
                $this->student->insert($data);
            }

            return redirect()->to(base_url('table'));
        } else {
            $data['currentPage'] = 'home';
            $data['currentAction'] = 'insert';
            $data['sections'] = $sections; 
            $data['errors'] = $this->validation->getErrors();
            return view('pages/home', $data);
        }
    }

    public function table()
    {
        $data = [
            'students' => $this->student->paginate(3),
            'pager' => $this->student->pager,
            'currentPage' => 'table',
        ];

        return view('pages/table', $data);
    }

    public function delete($id)
    {
        $this->student->delete($id);
        return redirect()->to(base_url('table'));
    }

    public function edit($id)
    {
        $data = [
            'action' => $id ? 'Update' : 'Create',
            'students' => $this->student->findAll(),
            'val' => $this->student->where('id', $id)->first(),
        ];

        $sections = $this->section->findAll();

        $data['sections'] = $sections;
        $data['currentPage'] = 'home';
        $data['currentAction'] = 'update';

        return view('pages/home', $data);
    }

    public function section()
    {
        $data['sections'] = $this->section->findAll();
        $data['currentPage'] = 'home';

    return view('pages/section', $data);
    }

    public function add()
    {
        $id = $this->request->getVar('id');
        $data = [
            'Section' => $this->request->getVar('Section'),
        ];
        
        $sections = $this->section->findAll();

        if ($this->validateSection()) {
            if ($id) {
                $this->section->update($id, $data);
            } else {
                $this->section->insert($data);
            }

            return redirect()->to(base_url('section'));
        } else {
            $data['currentPage'] = 'home';
            $data['currentAction'] = 'insert';
            $data['sections'] = $sections; 
            $data['errors'] = $this->validation->getErrors();
            return view('pages/section', $data);
        }
    }

    public function remove($id)
    {
        $this->section->delete($id);
        return redirect()->to(base_url('section'));
    }

    public function editSection($id)
    {
        $data = [
            'action' => $id ? 'Update' : 'Create',
            'sections' => $this->section->findAll(),
            'val' => $this->section->where('id', $id)->first(),
            'actionSection' => $id ? 'Update' : 'Create',
        ];

        $data['currentPage'] = 'home';
        $data['currentAction'] = 'update';
        return view('pages/section', $data);
    }


}
