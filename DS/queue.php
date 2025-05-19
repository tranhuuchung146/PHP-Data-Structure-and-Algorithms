<?php
class Queue {
    public $first;
    public $end;
    public $queue = [];

    function __construct() {
        $this->first = -1;
        $this->end = -1;
    }

    // Kiểm tra hàng đợi rỗng
    public function isEmpty() {
        return $this->first == $this->end;
    }

    // Trả về số lượng phần tử trong hàng đợi
    public function size() {
        return $this->end - $this->first;
    }

    // Thêm phần tử vào cuối hàng đợi
    public function enQueue($val) {
        $this->queue[++$this->end] = $val;
        return "$val is added to Queue\n";
    }

    // Xóa phần tử đầu tiên khỏi hàng đợi
    public function deQueue() {
        if ($this->isEmpty()) {
            throw new Exception("Queue is empty\n");
        } else {
            $val = $this->queue[++$this->first];
            return "$val is deQueue\n";
        }
    }

    // Lấy phần tử đầu tiên (không xóa)
    public function front() {
        if ($this->isEmpty()) {
            throw new Exception("Queue is empty\n");
        } else {
            return $this->queue[$this->first + 1] . "\n";
        }
    }

    // Lấy phần tử cuối cùng
    public function after() {
        if ($this->isEmpty()) {
            throw new Exception("Queue is empty\n");
        } else {
            return $this->queue[$this->end] . "\n";
        }
    }

    // In toàn bộ hàng đợi hiện tại
    public function printQueue() {
        if ($this->isEmpty()) {
            echo "Queue is empty\n";
        } else {
            echo "Queue: ";
            for ($i = $this->first + 1; $i <= $this->end; $i++) {
                echo $this->queue[$i] . " ";
            }
            echo "\n";
        }
    }
}

// Kiểm thử
$queue = new Queue;

if ($queue->isEmpty()) {
    echo "Queue is empty...\n";
} else {
    echo "Queue is not empty...\n";
}

echo "Size: " . $queue->size() . "\n";

echo $queue->enQueue(40);
echo $queue->enQueue(10);

try {
    echo $queue->deQueue();
    echo $queue->enQueue(30);
    echo "Front: " . $queue->front();
    echo "After: " . $queue->after();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

echo "Size: " . $queue->size() . "\n";
$queue->printQueue();
?>
