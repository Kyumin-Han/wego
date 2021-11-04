<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <img
                    class="logo"
                    alt="WEGO"
                    src="/image/HatchfulExport-All/logo_transparent.png">
        
                <form
                    class="card"
                    action="/wego/projectStore"
                    method="post"
                    enctype="multipart/form-data"
                    onkeydown="return event.key !='Enter';">
                    @csrf
                    <div>
                        <!-- 프로젝트 명 -->
                        <div class="form-group">
                            <label for="exampleFormControlInput1">프로젝트 명</label>
                            <input
                                type="text"
                                class="form-control"
                                name="projectTitle"
                                id="exampleFormControlInput1"
                                placeholder="프로젝트 명을 입력해 주세요.">
                        </div>
                    </div>
        
                    <div>
                        <div class="form-group">
                            <label for="peopleid">최대 참여 인원 선택</label>
                            <select class="form-control" name="people" id="peopleid" onchange="peopleDiv()">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="add_people">
                        <!-- 팀원추가 -->
                        <label for="exampleFormControlInput1" onclick="team_email_Plus()">
                            팀원추가
                        </label>
        
                        <div class="form-group" id="add_people">
                      
                        </div>
        
                    </div>
                    <br>
        
                    <div>
                        <!-- 프로젝트 개요 -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">프로젝트 개요</label>
                            <textarea
                                class="form-control"
                                name="outline"
                                id="exampleFormControlTextarea1"
                                rows="5"></textarea>
                        </div>
                        <br>
                        <!-- 첨부파일 -->
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input
                                type="file"
                                name="files[]"
                                class="form-control-file"
                                id="exampleFormControlFile1">
                        </div>
                    </div>
        
                    <div>
                        <!-- 기대 효과 -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">기대효과</label>
                            <textarea
                                class="form-control"
                                name="expectation"
                                id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit">저장</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>

    function peopleDiv() {
        let num = $("select[name=people]").val();

        $('#add_people').empty();

        for (i = 0 ; i < num ; i ++) {

            let temp_html = `
                        <input
                            type="email"
                            class="form-control"
                            id="emailInput"
                            placeholder="팀원의 이메일 주소를 적어 주세요">
        
                        `;
            $('#add_people').append(temp_html)

        }

    }
</script>