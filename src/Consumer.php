<?php
/**
 * Copyright (c) 2016. Sascha-Oliver Prolic
 *
 *  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 *  "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 *  LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 *  A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 *  OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 *  SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 *  LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 *  DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 *  THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 *  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 *  OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *  
 *  This software consists of voluntary contributions made by many individuals
 *  and is licensed under the MIT license.
 */

namespace Humus\Amqp;

/**
 * Interface Consumer
 * @package Humus\Amqp
 */
interface Consumer
{
    /**
     * Flag for message ack
     */
    const MSG_ACK = 1;

    /**
     * Flag for message defer
     */
    const MSG_DEFER = 0;

    /**
     * Flag for reject and drop
     */
    const MSG_REJECT = -1;

    /**
     * Flag for reject and requeue
     */
    const MSG_REJECT_REQUEUE = -2;

    /**
     * Start consumer
     *
     * @param int $msgAmount
     */
    public function consume($msgAmount = 0);
}
