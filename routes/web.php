<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassModelController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoticeBoardController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'authLogin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/add', [AdminController::class, 'add']);
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::put('admin/admin/edit/{id}', [AdminController::class, 'update']);
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'delete']);
    // Students Routes
    Route::get('admin/student/list', [StudentController::class, 'list']);
    Route::get('admin/student/add', [StudentController::class, 'add']);
    Route::post('admin/student/add', [StudentController::class, 'insert']);
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);
    Route::put('admin/student/edit/{id}', [StudentController::class, 'update']);
    Route::get('admin/student/delete/{id}', [StudentController::class, 'delete']);

   // Route::get('',[ClassModelController::class,'add_class']);
   Route::get('import', [UserController::class, 'import']);
Route::post('import',[UserController::class,'store']);
    // Importing Students
    //Route::post('import', [StudentController::class, 'store']);
    // Teacher Routes
    Route::get('admin/teacher/list', [TeacherController::class, 'list']);
    Route::get('admin/teacher/add', [TeacherController::class, 'add']);
    Route::post('admin/teacher/add', [TeacherController::class, 'insert']);
    Route::get('admin/teacher/edit/{id}', [TeacherController::class, 'edit']);
    Route::put('admin/teacher/edit/{id}', [TeacherController::class, 'update']);
    Route::get('admin/teacher/delete/{id}', [TeacherController::class, 'delete']);
    Route::get('admin/teacher/my-student/{id}', [TeacherController::class, 'myStudent']);
    Route::get('admin/teacher/assign_student_teacher/{student_id}/{teacher_id}', [TeacherController::class, 'assignStudentTeacher']);
    Route::get(' admin/teacher/assign_student_teacher_delete/{student_id}', [TeacherController::class, 'assignStudentTeacherDelete']);
    //class Routes
    Route::get('/admin/class/list', [ClassModelController::class, 'list']);
    Route::get('admin/class/add', [ClassModelController::class, 'add']);
    Route::post('admin/class/add', [ClassModelController::class, 'insert']);
    Route::get('admin/class/edit/{id}', [ClassModelController::class, 'edit']);
    Route::put('admin/class/edit/{id}', [ClassModelController::class, 'update']);
    Route::get('admin/class/delete/{id}', [ClassModelController::class, 'delete']);
    // Change Password
    Route::get('admin/change_password', [UserController::class, 'changePassword']);
    Route::post('admin/change_password', [UserController::class, 'updatePassword']);
    // Notice Board
    Route::get('admin/notice_board',[NoticeBoardController::class,'noticeBoard']);
    Route::get('admin/notice_board/add',[NoticeBoardController::class,'addNoticeBoard']);
    Route::post('admin/notice_board/add',[NoticeBoardController::class,'insertNoticeBoard']);
    Route::get('admin/notice_board/edit/{id}',[NoticeBoardController::class,'edit']);
    Route::put('admin/notice_board/edit/{id}',[NoticeBoardController::class,'update']);
    Route::get('admin/notice_board/delete/{id}',[NoticeBoardController::class,'delete']);
});
Route::group(['middleware' => 'teacher'], function () {
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('teacher/my_student', [TeacherController::class, 'myStudentTeacher']);
    Route::get('teacher/my_student/proposal', [ProposalController::class, 'myStudentProposal']);
    // Proposal Approved And Reject Routes
    Route::get('approve/{id}', [TeacherController::class, 'approveProposal']);
    Route::get('reject/{id}', [TeacherController::class, 'rejectProposal']);
    Route::get('view/{id}', [TeacherController::class, 'viewProposal']);
    // Proposal Suggestion
    Route::get('teacher/proposal/edit/{id}', [ProposalController::class, 'editTeacher']);
    Route::put('teacher/proposal/edit/{id}', [ProposalController::class, 'updateTeacher']);
    // Change Password
    Route::get('teacher/change_password', [UserController::class, 'changePassword']);
    Route::post('teacher/change_password', [UserController::class, 'updatePassword']);
    // NoticeBoard
    Route::get('teacher/notice_board', [NoticeBoardController::class, 'myNoticeboardTeacher']);
      // Task
      Route::get('teacher/task',[LogController::class,'list']);
      Route::get('teacher/task/add',[LogController::class,'add']);
      Route::post('teacher/task/add',[LogController::class,'insert']);
      Route::get('teacher/task/edit/{id}',[LogController::class,'edit']);
      Route::put('teacher/task/edit/{id}',[LogController::class,'update']);
      Route::get('teacher/task/delete/{id}',[LogController::class,'delete']);
      Route::get('teacher/task/submitted/{id}',[LogController::class,'submitted']);
});
Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);
    //  Proposals Routes
    Route::get('student/proposal/list', [ProposalController::class, 'list']);
    Route::get('student/proposal/add', [ProposalController::class, 'add']);
    Route::post('student/proposal/add', [ProposalController::class, 'insert']);
    Route::get('student/proposal/edit/{id}', [ProposalController::class, 'edit']);
    Route::put('student/proposal/edit/{id}', [ProposalController::class, 'update']);
    Route::get('student/proposal/delete/{id}', [ProposalController::class, 'delete']);
    Route::get('view/my_proposal/{id}', [ProposalController::class, 'viewMyProposal']);
    // Change Password
    Route::get('student/change_password', [UserController::class, 'changePassword']);
    Route::post('student/change_password', [UserController::class, 'updatePassword']);
    // Notice Board
    Route::get('student/notice_board', [NoticeBoardController::class, 'myNoticeboardStudent']);
    Route::get('student/my_task', [LogController::class, 'myTask']);
    Route::get('student/my_task/submit/{id}', [LogController::class, 'myTaskSubmit']);
    Route::post('student/my_task/submit/{id}', [LogController::class, 'myTaskSubmitInsert']);
    Route::get('student/my_task/submitted', [LogController::class, 'mySubmittedTask']);

});


