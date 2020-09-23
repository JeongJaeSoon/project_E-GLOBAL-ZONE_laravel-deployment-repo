<?php

return [
    'uri' => [
        'main' => 'http://gzone.yjuweb.org/',
        'admin' => 'http://gzone.yjuweb.org/admin',
        'reset' => 'http://gzone.yjuweb.org/api/reset',
    ],
    'kor' => [
        'access' => [
            'admin' => '관리자만 접근 할 수 있습니다.',
        ],
        'dept' => [
            'index' => [
                'success' => '계열/학과 목록 조회에 성공하였습니다.',
                'failure' => '계열/학과 목록 조회에 실패하였습니다.',
                'no_value' => '등록된 계열/학과가 없습니다.'
            ],
            'store' => [
                'success' => '(을)를 계열/학과 목록에 추가하였습니다.',
                'failure' => '계열/학과 추가에 실패하였습니다.',
            ],
            'update' => [
                'success' => '(으)로 계열/학과 이름을 변경하였습니다.',
                'failure' => '계열/학과 이름 변경에 실패하였습니다.',
            ],
            'destroy' => [
                'success' => '(을)를 계열/학과 목록에서 삭제하였습니다.',
                'failure' => '계열/학과 삭제에 실패하였습니다.',
            ]
        ],
        'std_for' => [
            'store' => [
                'success' => '(을)를 유학생 목록에 추가하였습니다.',
                'failure' => '유학생 추가에 실패하였습니다.'
            ],
            'destroy' => [
                'success' => '(을)를 유학생 목록에서 삭제하였습니다.',
                'failure' => '유학생 삭제에 실패하였습니다.'
            ]
        ],
        'std_for_contacts' => [
            'index' => [
                'success' => '선택한 유학생에 대한 연락처 정보 조회에 성공하였습니다.',
                'failure' => '유학생 연락처 정보 조회에 실패하였습니다.',
                'no_value' => '선택한 유학생에 대한 연락처 정보가 없습니다.'
            ]
        ],
        'work_std_for' => [
            'index' => [
                'success' => '의 근로유학생 목록 조회에 성공하였습니다.',
                'failure' => '근로유학생 목록 조회에 실패하였습니다.',
                'no_value' => '에 등록된 근로유학생이 없습니다.'
            ],
            'store' => [
                'success' => '의 근로유학생 목록 추가에 성공하였습니다.',
                'failure' => '근로유학생 목록 추가에 실패하였습니다.',
            ],
            'destroy' => [
                'success' => '의 근로유학생 목록에서 삭제되었습니다.',
                'failure' => '근로유학생 목록 삭제에 실패하였습니다.',
            ]
        ],
        'not_work_std_for' => [
            'index' => [
                'success' => '의 미등록 유학생 목록 조회에 성공하였습니다.',
                'failure' => '미등록 유학생 목록 조회에 실패하였습니다.',
            ]
        ],
        'data_export' => [
            'dept' => '계열, 학과 목록.xlsx',
            'std_kor' => '글로벌 존 이용 학생 목록.xlsx',
            'std_for' => '글로벌 존 유학생 목록.xlsx',
            'work_std_for' => '글로벌 존 근로 유학생 목록.xlsx',
            'failure' => '엑셀 파일 출력에 실패하였습니다.'
        ]
    ]

];
