;hello_world.asm
;date: 20/2/2020

global _start

section .text:

_start:
    mov eax, 0x4            ; use the write syscall
    mov ebx, 1              ; use stdout as the fd
    mov ecx, message        ; use the message as the buffer
    mov edx, message_length ; supply the length 
    int 0x80                ; invoke the syscall
    
    ; now gracefully exit
    
    mov eax, 0x1
    mov ebx, 0              ; return value
    int 0x80

section .data:
    message: db "Hello World!", 0xa
    message_length equ $-message
