
//Sidebar DOM Elements
const newTaskbtn = document.body.querySelector('#open-task-form-button');
const addTaskCard = document.getElementById('create-task');
const allTaskBtn = document.getElementById("all-task-button");
const workBtn = document.getElementById("work-task-button");
const studyBtn = document.getElementById("study-task-button");
const sportBtn = document.getElementById("sport-task-button");
const choreBtn = document.getElementById("chore-task-button");
const logoutBtn = document.getElementById("logoutBtn");

//Add task box DOM
const addTaskForm = document.querySelector(".add-task-form");
const newTaskIpt = document.querySelector('.add-ipt');
const taskTypeIpt = document.querySelector('.taskType');
const addTaskBtn = document.getElementsByClassName('add-task-btn');
const cancelTaskBtn = document.getElementsByName('cancel-task-btn');


//Todo box DOM
const todoList = document.querySelector('.todo-list');

//Done task box DOM
const doneSection = document.querySelector('.done-section');
const doneList = document.querySelector('.done-list');


//test
let allTaskList = [];
let allDoneList = [];

//allTaskBtn to redirect to main page
allTaskBtn.addEventListener("click", ()=>{
    window.location.href = "todoList.php";
})



//get todo list for work
function getWorkList(taskList) {
    var workList = [];
    taskList.forEach(task => {
        if (task.type == "work") {
            workList.push(task);
        }
    });
    console.log(workList);
    return workList;
}

//get done list for work
function getWorkDoneList(taskList) {
    var workDoneList = [];
    taskList.forEach(task => {
        if (task.type == "work") {
            workDoneList.push(task);
        }
    });
    console.log(workDoneList);
    return workDoneList;
}

//WorkBtn click to display all work task
workBtn.addEventListener("click", () => {
    todoList.innerHTML = "";
    doneList.innerHTML = "";
    if (allTaskList != null) {
        
        const workListItems = getWorkList(allTaskList);
        workListItems.forEach(workItem => {
            const li = document.createElement("li");
            li.className = "todo-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = workItem.task;

            li.appendChild(span);
            todoList.appendChild(li);
        });

    }

    if(allDoneList != null){
        console.log(allDoneList);
        const workDoneItems = getWorkDoneList(allDoneList);
        workDoneItems.forEach(doneItem => {
            const li = document.createElement("li");
            li.className = "done-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = doneItem.task;

            li.appendChild(span);
            doneList.appendChild(li);
        })
    }
})


//get todo list for study
function getStudyList(taskList) {
    var studyList = [];
    taskList.forEach(task => {
        if (task.type == "study") {
            studyList.push(task);
        }
    });
    console.log(studyList);
    return studyList;
}

//get done list for study
function getStudyDoneList(taskList) {
    var studyDoneList = [];
    taskList.forEach(task => {
        if (task.type == "study") {
            studyDoneList.push(task);
        }
    });
    console.log(studyDoneList);
    return studyDoneList;
}

//StudyBtn click to display all study task
studyBtn.addEventListener("click", () => {
    todoList.innerHTML = "";
    doneList.innerHTML = "";
    if (allTaskList != null) {
        
        const studyListItems = getStudyList(allTaskList);
        studyListItems.forEach(studyItem => {
            const li = document.createElement("li");
            li.className = "todo-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = studyItem.task;

            li.appendChild(span);
            todoList.appendChild(li);
        });

    }

    if(allDoneList != null){
        console.log(allDoneList);
        const studyDoneItems = getStudyDoneList(allDoneList);
        studyDoneItems.forEach(doneItem => {
            const li = document.createElement("li");
            li.className = "done-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = doneItem.task;

            li.appendChild(span);
            doneList.appendChild(li);
        })
    }
})

//get todo list for sport
function getSportList(taskList) {
    var sportList = [];
    taskList.forEach(task => {
        if (task.type == "sport") {
            sportList.push(task);
        }
    });
    console.log(sportList);
    return sportList;
}

//get done list for sport
function getSportDoneList(taskList) {
    var sportDoneList = [];
    taskList.forEach(task => {
        if (task.type == "sport") {
            sportDoneList.push(task);
        }
    });
    console.log(sportDoneList);
    return sportDoneList;
}

//SportBtn click to display all sport task
sportBtn.addEventListener("click", () => {
    todoList.innerHTML = "";
    doneList.innerHTML = "";
    if (allTaskList != null) {
        const sportListItems = getSportList(allTaskList);
        sportListItems.forEach(sportItem => {
            const li = document.createElement("li");
            li.className = "todo-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = sportItem.task;

            li.appendChild(span);
            todoList.appendChild(li);
        });

    }

    if(allDoneList != null){
        console.log(allDoneList);
        const sportDoneItems = getSportDoneList(allDoneList);
        sportDoneItems.forEach(doneItem => {
            const li = document.createElement("li");
            li.className = "done-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = doneItem.task;

            li.appendChild(span);
            doneList.appendChild(li);
        })
    }
})

//get todo list for chores
function getChoreList(taskList) {
    var choreList = [];
    taskList.forEach(task => {
        if (task.type == "chore") {
            choreList.push(task);
        }
    });
    console.log(choreList);
    return choreList;
}

//get done list for chores
function getChoreDoneList(taskList) {
    var choreDoneList = [];
    taskList.forEach(task => {
        if (task.type == "chore") {
            choreDoneList.push(task);
        }
    });
    console.log(choreDoneList);
    return choreDoneList;
}

//ChoreBtn click to display all study task
choreBtn.addEventListener("click", () => {
    todoList.innerHTML = "";
    doneList.innerHTML = "";
    if (allTaskList != null) {
        const choreListItems = getChoreList(allTaskList);
        choreListItems.forEach(choreItem => {
            const li = document.createElement("li");
            li.className = "todo-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = choreItem.task;

            li.appendChild(span);
            todoList.appendChild(li);
        });

    }

    if(allDoneList != null){
        const choreDoneItems = getChoreDoneList(allDoneList);
        choreDoneItems.forEach(doneItem => {
            const li = document.createElement("li");
            li.className = "done-item item";
            const span = document.createElement("span");
            span.className = "text";
            span.textContent = doneItem.task;

            li.appendChild(span);
            doneList.appendChild(li);
        })
    }
})

//Get todoList from php
fetch("todoList_db.php").then(response => response.json())
    .then(data => {
        allTaskList = data;
        if (data.error) {
            window.alert(data.error);
            return;
        }
        console.log(allTaskList);
        displayTodoList(data);
    })

//Get doneList from php
fetch("doneList_db.php").then(response => response.json())
    .then(data => {
        allDoneList = data;
        if (data.error) {
            window.alert(data.error);
            return;
        }
        displayDoneList(data);
    })

//Click to show the add a new task box
newTaskbtn.addEventListener('click', () => {
    addTaskCard.className = 'task-card pop-up';
});

//Click to cancel task entry
function hideTaskEntry() {
    addTaskCard.className = 'task-card hidden';
}


//Fetch data when Submit
addTaskForm.addEventListener('submit', (e) => {

    e.preventDefault();
    const newTask = newTaskIpt.value;
    const taskType = taskTypeIpt.value;
    console.log(newTask);
    console.log(taskType);

    if (newTask != null && taskType != null) {
        fetch("addTask_db.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            // body: JSON.stringify({newTask:newTask,taskType:taskType})
            body: JSON.stringify({ newTask, taskType })
        }).then(() => {
            location.reload();
            window.alert("New task added.");
            addTaskCard.className = "task-card hidden";
        }).catch((error) => {
            console.log('hi i am bug:', error)
        }
        );
    }


});

//Display todo list
function displayTodoList(todoItems) {
    todoList.innerHTML = "";
    todoItems.forEach(todo => {
        const li = document.createElement("li");
        li.className = "todo-item item";
        const idSpan = document.createElement("span");
        idSpan.className = "taskId hidden";
        idSpan.textContent = todo.id;
        const span = document.createElement("span");
        span.className = "text";
        span.textContent = todo.task;
        const checkBox = document.createElement("input");
        checkBox.type = "checkbox";
        checkBox.className = "taskCheckBox";

        li.appendChild(span);
        li.appendChild(idSpan);
        li.appendChild(checkBox);
        todoList.appendChild(li);
    });
}

//Pass checked task to moveTask_db
todoList.addEventListener("change", (e) => {
    console.log("checkbox changed.");
    if (e.target.classList.contains("taskCheckBox")) {
        const taskToMove = e.target.closest(".todo-item");
        console.log(taskToMove);
        if (taskToMove) {
            const moveTaskId = document.querySelector(".taskId").textContent.trim();
            console.log(moveTaskId);

            if (moveTaskId) {
                fetch("moveTask_db.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ moveTaskId })
                }).then(response => {
                    if (response.ok) {
                        taskToMove.remove();
                        location.reload();
                        window.alert("Task completed.");
                    } else {
                        console.error("Failed to complete task.")
                    }
                }).catch((error) => {
                    console.log('hi i am bug:', error)
                }
                );
            }
        }
    }
});

//Display done List
function displayDoneList(doneItems) {
    doneList.innerHTML = "";
    doneItems.forEach(done => {
        const li = document.createElement("li");
        li.className = "done-item item";
        const idSpan = document.createElement("span");
        idSpan.className = "donetaskId hidden";
        idSpan.textContent = done.id;
        const span = document.createElement("span");
        span.className = "text";
        span.textContent = done.task;

        const label = document.createElement("label");
        label.className = "checkbox-label";
        const checkBox = document.createElement("input");
        checkBox.type = "checkbox";
        checkBox.className = "doneCheckBox";
        const icon = document.createElement("img");
        icon.src = 'cancel_icon.png';
        icon.className = "checkBoxIcon";

        label.appendChild(checkBox);
        label.appendChild(icon);

        li.appendChild(span);
        li.appendChild(idSpan);
        li.appendChild(label);
        doneList.appendChild(li);
    });
}

//Pass delete task to removeTask_db
doneList.addEventListener("change", (e) => {
    console.log("checkbox changed.");
    if (e.target.classList.contains("doneCheckBox")) {
        const taskToRemove = e.target.closest(".done-item");
        console.log(taskToRemove);
        if (taskToRemove) {
            const removeTaskId = document.querySelector(".donetaskId").textContent.trim();
            console.log(removeTaskId);

            if (removeTaskId) {
                fetch("removeTask_db.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ removeTaskId })
                }).then(response => {
                    if (response.ok) {
                        taskToRemove.remove();
                        location.reload();
                        window.alert("Task deleted.");
                    } else {
                        console.error("Failed to delete task.")
                    }
                }).catch((error) => {
                    console.log('hi i am bug:', error)
                }
                );
            }
        }
    }
});

//Logout Btn to logout
logoutBtn.addEventListener("click", ()=>{
    window.location.href = "logout_db.php";
})




