<?php

namespace App\Livewire;
use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;
class TodoList extends Component
{
    use WithPagination;

    public $name;
    public $search;

    public $editingTodoID;
    public $editingTodoName;
    protected $rules = [
        'name' => 'required|min:3|max:50',
        'search' => 'nullable|min:3|max:50',
        'editingTodoName' => 'required|min:3|max:50',
    ];

    public function create(){
        $validated = $this->validateOnly('name');
        Todo::create($validated);
        $this->reset('name');

        session()->flash('success', 'Todo created successfully');
        $this->resetPage();
    }

    public function delete($todoId){
        Todo::find($todoId)->delete();
    }
    public function toggle($todoId){
        $todo = Todo::find($todoId);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function edit($todoId){
        $this->editingTodoID = $todoId;
        $this->editingTodoName = Todo::find($todoId)->name;
    }



    public function cancelEdit(){
        $this->reset('editingTodoID','editingTodoName');
    }
    public function update(){
        $this->validateOnly('editingTodoName');
        Todo::find($this->editingTodoID)->update([
            'name' => $this->editingTodoName
        ]
        );
        $this->cancelEdit();
    }
    public function render()
    {
        return view('livewire.todo-list',['todos' => Todo::latest()->where('name','like',"%{$this->search}%")->paginate(5)]);
    }
}
