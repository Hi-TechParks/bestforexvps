    <!-- Show modal content -->
    <div id="showModal-{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">{{ $title }} Details View</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Details View Start -->
                    <h4><span class="text-highlight">Package:</span> {{ $row->package }}</h4>
                    <h6><span class="text-highlight">Provider:</span> {{ $row->provider->title }}</h6>
                    <hr/>
                    
                    <div class="table-responsive">
                      <table id="basic-datatable" class="table table-border table-hover nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Primary Price</td>
                                <td>{{ $row->pri_price }}</td>
                            </tr>
                            <tr>
                                <td>Discount Price</td>
                                <td>{{ $row->disc_price }}</td>
                            </tr>
                            <tr>
                                <td>CPU</td>
                                <td>{{ $row->cpu }}</td>
                            </tr>
                            <tr>
                                <td>Storage</td>
                                <td>{{ $row->storage }}</td>
                            </tr>
                            <tr>
                                <td>RAM</td>
                                <td>{{ $row->ram }}</td>
                            </tr>
                            <tr>
                                <td>Bandwidth</td>
                                <td>{{ $row->bandwidth }}</td>
                            </tr>
                            <tr>
                                <td>IP Address</td>
                                <td>{{ $row->ip_address }}</td>
                            </tr>
                            <tr>
                                <td>Transfer</td>
                                <td>{{ $row->transfer }}</td>
                            </tr>
                            <tr>
                                <td>Domain</td>
                                <td>{{ $row->domain }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $row->email }}</td>
                            </tr>
                            <tr>
                                <td>SSL</td>
                                <td>{{ $row->ssl }}</td>
                            </tr>
                            <tr>
                                <td>Order No</td>
                                <td>{{ $row->order }}</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>

                    <hr/>
                    <p><span class="text-highlight">Status:</span> 
                    @if( $row->status == 1 )
                    <span class="badge badge-success badge-pill">Active</span>
                    @else
                    <span class="badge badge-danger badge-pill">Inactive</span>
                    @endif
                    </p>
                    <!-- Details View End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->