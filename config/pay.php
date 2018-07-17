<?php

return [
    'alipay' => [
        'app_id' => '2016091900543962',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA73tbL60osMI4Cyxw0ZzfCL6dmL3OHAN10R+PVtQhmvXUhGsfnPAtMfCs8v0ZXhEdtXs52PT3+YU7wSPFtRsVLXwkIwm4yElmikUpjYmhW+5/rWlDfSQH49gr9fijhrUlQPJQpsygc50j3PHSoqgsVMoi7yZsYBpF3H/1jZf9T7D8Q7UCfli/qeM5sanDy34SeTi2n9jCkuKkl2FA6kIQEtbCeQy13ImAzr5IX6yWpkTfUV51wpJsmb+NQnRP3eWKa6l4Xb0W4f8TaiOVBUPcoEdMuN6CyKyv1l8NM2QCvtVs10wxcGFZvF90nZJjk4JaAJt561QjyULEp55uSy29MQIDAQAB',
        'private_key' => 'MIIEogIBAAKCAQEAvO6UyNVCADpNExDGFJ4qEHM/qnO8x2x6vAyFcVU0kD7BTOGutRQcVvf0v7eLWG06xzElbmYC8kBBtdYw1LqqcDcQvd6p9hK2b+WlqeTkOqVistgJxCcnWkmSPitFDdIbDYlTCYElUwnsKhBw68BPrOQg4yIE66Ep2kuiUanSNECvS8FqEAfgiOLyMA3/7vv7E1UOizCGXB4cMv4s6HmS+KTjG81iIO4VqV7F2KNauwealoRFbXowslYNm70t0TUHorQ9pWgXvU6OIklPFnBXeIrGrMrzg0Oq+Vl/lftc6vbqUF5OHpKljhAgFkZnogYRWHlDzMSSM0w/ZBKn4OYG9QIDAQABAoIBABBGxY6fwLXgT++KjGYOUjVkmGGI4wSTNeepdH2VB5g9r819y91RxDdB2VYC7ABMOLocY8slAq/4FTEjKMXK5xAPzmNtIVtPtWPidukyDO94fA5ISl8ZuGww1maAt8w/A5Gg+QRimeKTgkMFc5T71mFgreyja6UZF0/1ICDE7pUNr6av0vGaOgOTlKSW1R7jtovDsYy9JNZGxrPQzOGLoU8A2SZfT88FIVxwZXkT4wKY9oPxRlmF6XTLs4RALSbHxKQZ2npYpiPHcwro6db9OMrCtJavIsfsn/hTPYWbaUpAEzIPbyVmVvTZUM+eU7KGoQQT+MPJplsS9al4Y5c5N2kCgYEA3x+0T13kbj6j1Y2y94kPJPEokfDOKf/qEabd0ZO/jNAjfQnOQJErY3x9XH2FOSbJNEdgy/TDR8BSEsWBE/7jgfjr3UQqAe/JyYELt4irPdE/WZDA6n/fFhhGDcKnQO+ZzEnFWCextHbg+C9AxHHmd/ni9abppv4PIK/rHZefZtsCgYEA2MUmJlRRh/jr8eocM8HuZ1d8I1nJNx2O89mAimFO+oWhZzGf0HmujARbHO72C4Vfct+EOIF/utiSVsrSknpnfmoZsYhd5KICU+TNSqiQbERhrFf+XHweq1NfiQCJkm4bfMi5AhQC7paVGYg0u7l+kNArQqRXDueNy4b93kbhqm8CgYAq/T3NaObBQvpoA/Quc07irEBH1iCywOcFXaQxZAktBVFBHymJES9N7MdukZSgjVOI6hPBWDhj0688hKc5Bgwpl59CM4bwdpXnaCCszP1JXM6a4CP7SoXeCPE+Z3m4LjHwxWnrcUJw5dK0ns4Yy2U/SnsrH2y3Sw35G0vumK8SrwKBgFdljU8Q2dpfgwmDISHBA9TIkfVSwuykzzkDrW6dcxFQhVWszUlpdfVf4DhXI/5bJLOU6KM7mvsDTGUP2zxRe56dOoS4fVqr8xJOAnMiaTAtlc+9noE9TcQ3liIPhGf0WsLBzs3GsbPuJGkp4FD7pcrPE1IIHk2VEDdJ0tsmat+jAoGAewiLx4x+bTjD4HdNj5ze1OlL7/0sRlr+IxzMC9hKe8YRCUuM0YQNu4hUVxi39JsTaTQ1iEO2rKNEiWbXaDZdTsM05aakau18teeCIjRWEIpcuV2ktLFUIY3a50eBLAm/ekc6konyXbbcn8t4vPAIwr+0k+bmqKlv1NOrwMvCcjg=',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];