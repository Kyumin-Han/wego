<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                        <!-- 사진 -->
                        <img src="\image\sosoeueunOctocat" class="rounded mx-auto d-block" alt="이미지를 찾을 수 없습니다.">
                
                        <!-- 내용 -->
                   
                            <div class="card-body">
                                {{-- 로그인한 사용자 이름 값을 받아와 넣어야 함 --}}
                                <h5 class="card-title">{{ auth()->user()->name }}</h5>


                                <div>
                                  <form action="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            자기소개
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="formGroupExampleInput"
                                            placeholder="자신을 자유롭게 표현해봐요!">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">연락처</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="formGroupExampleInput2"
                                            placeholder="블로그 주소나, 연락처를 적어주세요!">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">기술</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="formGroupExampleInput2"
                                            placeholder="자신이 사용 할 수 있는 기술을 적어주세요!">
                                    </div>
                                    <div class="col-auto my-1">
                                        <button type="submit" class="btn btn-primary">저장</button>
                                      </div>
                          
                                </form>
                                </div>
                
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>


</x-app-layout>
