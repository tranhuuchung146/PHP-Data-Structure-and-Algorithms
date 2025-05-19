<?php
class Stack {
    public $top;
    public $stack = [];

    function __construct() {
        $this->top = -1;
    }

    // Kiểm tra stack rỗng
    public function isEmpty() {
        return $this->top == -1;
    }

    // Kích thước stack
    public function size() {
        return ($this->top + 1) . "\n";
    }

    // Thêm phần tử vào stack
    public function push($val) {
        $this->stack[++$this->top] = $val;
        return "$val is added to stack\n";
    }

    // Xóa phần tử trên cùng
    public function pop() {
        if ($this->isEmpty()) {
            throw new Exception("Stack is empty\n");
        } else {
            $val = $this->stack[$this->top--];
            return "$val is deleted from stack\n";
        }
    }

    // Lấy phần tử trên cùng
    public function topElement() {
        if ($this->isEmpty()) {
            throw new Exception("Stack is empty\n");
        } else {
            return $this->stack[$this->top] . "\n";
        }
    }

    // In toàn bộ stack
    public function printStack() {
        if ($this->isEmpty()) {
            echo "Stack is empty\n";
        } else {
            echo "Stack elements (top to bottom): ";
            for ($i = $this->top; $i >= 0; $i--) {
                echo $this->stack[$i] . " ";
            }
            echo "\n";
        }
    }
}

// Kiểm thử
$stack = new Stack;

if ($stack->isEmpty()) {
    echo "Stack is empty...\n";
} else {
    echo "Stack is not empty...\n";
}

echo "Size: " . $stack->size();

echo $stack->push(4);
echo $stack->push(6);
echo $stack->push(1);

try {
    echo $stack->pop();
    echo $stack->push(7);
    echo "Top element: " . $stack->topElement();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

echo "Size: " . $stack->size();
$stack->printStack();
?>
